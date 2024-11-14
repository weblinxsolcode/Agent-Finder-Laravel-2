<?php

namespace App\Http\Controllers;

use App\Mail\Register;
use App\Models\Agents;
use App\Models\contactLeads;
use App\Models\Leads;
use App\Models\newComission;
use App\Models\Newsletter;
use App\Models\proprtyReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiController extends Controller
{

    public function agentComission(Request $request)
    {

        if (isset($request->suburb_name) && $request->suburb_name != null) {
            $suburb_name = trim($request->suburb_name);
        } else {
            $suburb_name = null;
        }

        if (isset($request->state) && $request->state != null) {
            $state = trim($request->state);
        } else {
            $state = null;
        }

        $query = newComission::query();

        // Exclude "created_at" and "updated_at" columns from the result
        $query->select('suburb_name', 'state', 'comission');

        if ($suburb_name != null) {
            $query->where("suburb_name", $suburb_name);
        }

        if ($state != null) {
            $query->where("state", $state);
        }

        $item = $query->first();

        return response($item, 200)->header("Content-type", "Application/json");
    }

    public function storeLead(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "purpose" => "required",
            "type" => "required",
            "duration" => "required",
            "address" => "required",
            "bedroom" => "nullable",
            "first_name" => "nullable",
            "last_name" => "nullable",
            "email" => "nullable",
            "phone" => "nullable",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $code = "#" . rand(000000, 999999);

        $new = new Leads;
        $new->code = $code;
        $new->first_name = $request->first_name;
        $new->last_name = $request->last_name;
        $new->phone = $request->phone;
        $new->email = $request->email;
        $new->address = $request->address;
        $new->purpose = $request->purpose;
        $new->type = $request->type;
        $new->duration = $request->duration . ' Months';
        $new->bedroom = $request->bedroom;
        $new->lat = $request->lat ?? null;
        $new->long = $request->long ?? null;
        $new->save();

        $message = "Lead has been submitted successfully.";

        $data = compact("message");

        return response($data, 200)->header("Content-type", "Application/json");
    }

    public function propertReport(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "own_property" => "required",
            "selling_status" => "required",
            "email" => "required|email",
            "first_name" => "required",
            "last_name" => "required",
            "phone_number" => "required",
            "address" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $new = new proprtyReport;
        $new->own_property = $request->own_property;
        $new->selling_status = $request->selling_status;
        $new->email = $request->email;
        $new->first_name = $request->first_name;
        $new->last_name = $request->last_name;
        $new->phone = $request->phone_number;
        $new->address = $request->address;
        $new->save();

        $message = "Proprty report has been submitted.";

        $data = compact("message");

        return response($data, 200)->header("Content-Type", "Application/json");
    }

    public function newsletter(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "email" => "required|email",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $checkExisting = Newsletter::where("email", $request->email)->exists();

        if ($checkExisting == true) {
            $message = "You have already subscribed to the newsletter.";

            $data = compact("message");

            return response($data, 401)->header("Content-type", "Application/json");
        }

        $new = new Newsletter();
        $new->email = $request->email;
        $new->save();

        $message = "You have successfully subscribed to the newsletter.";

        $data = compact("message");

        return response($data, 200)->header("Content-type", "Application/json");
    }

    public function partnerWithUs(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|email",
            "phone_number" => "required",
            "agency_name" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $new = new contactLeads;
        $new->name = ucfirst($request->first_name) . ' ' . ucfirst($request->last_name);
        $new->email = $request->email;
        $new->phone = $request->phone_number;
        $new->description = $request->agency_name;
        $new->save();

        $message = "Your request has been submitted successfully.";

        $data = compact("message");

        return response($data, 200)->header("Content-type", "Application/json");
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "role" => "required|string",
            "agency_name" => "required|string",
            "agency_code" => "required|string",
            "agency_address" => "required|string",
            "first_name" => "required|string",
            "last_name" => "required|string",
            "email" => "required|email",
            "focused_on" => "required|string",
            "password" => "required",
            "confirm_password" => "required|same:password",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $checkExisting = Agents::where("email", $request->email)->exists();

        if ($checkExisting == true) {
            $message = "Email already exists !";

            $data = compact("message");

            return response($data, 401)->header("Content-type", "Application/json");
        }

        $code = Str::random(24) . rand(000000, 99999);

        $new = new Agents;
        $new->position = $request->role;
        $new->agency_name = $request->agency_name;
        $new->agenct_code = $request->agency_code;
        $new->agenct_address = $request->agency_address;
        $new->first_name = $request->first_name;
        $new->last_name = $request->last_name;
        $new->email = $request->email;
        $new->focused = $request->focused_on;
        $new->phone_number = $request->phone_number;
        $new->password = Hash::make($request->password);
        $new->url_code = $code;
        $new->status = 1;
        $new->save();

        $email = $new->email;

        $name = $new->first_name . ' ' . $new->last_name;

        $url = route('agent.login');

        $responseUrl = route('url.login', ['id' => $code]);

        Mail::to($email)->send(new Register($name, $email, $url));

        $message = "Your request has been submitted successfully.";

        $data = compact("message", "responseUrl");

        return response($data, 200)->header("Content-type", "Application/json");
    }

}
