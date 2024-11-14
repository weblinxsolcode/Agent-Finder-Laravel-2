<?php

namespace App\Http\Controllers;

use App\Mail\OTPVerification;
use App\Models\Agents;
// use Barryvdh\DomPDF\PDF;
use App\Models\assignLead;
use App\Models\contactLeads;
use App\Models\Leads;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PDF;

class IndexController extends Controller
{

    public function home()
    {
        $title = "Home";

        $data = compact("title");

        return view("template.index")->with($data);
    }

    public function index()
    {
        $title = "Agent Portal";

        $data = compact("title");

        return view("template.agentportal")->with($data);
    }

    public function aboutUs()
    {
        $title = "About Us";

        $data = compact("title");

        return view("template.aboutus")->with($data);
    }

    public function cashBack()
    {
        $title = "Cash Back";

        $data = compact("title");

        return view("template.cashback")->with($data);
    }

    public function propertyReport()
    {
        $title = "Property Report";

        $data = compact("title");

        return view("template.propertyreport")->with($data);
    }

    public function calculator()
    {
        $title = "Calculator";

        $data = compact("title");

        return view("template.calculators")->with($data);
    }

    public function contact()
    {
        $title = "Contact Us";

        $data = compact("title");

        return view("template.contact")->with($data);
    }

    public function registration()
    {
        $title = "Registration";

        $data = compact("title");

        return view("template.agentportalsteps")->with($data);
    }

    public function storeRegistration(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'agent_type' => 'required',
            'agency_name' => 'required',
            'agency_address' => 'required',
            'agency_code' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'focused_on' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'lat' => "nullable",
            'long' => "nullable",
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422); // Unprocessable Entity
        }

        try {

            $checkExisting = Agents::where("email", $request->email)->exists();

            if ($checkExisting == true) {
                $message = "Email Already Exists";

                $data = compact("message");

                return response(401)->header("Content-type", "Application/json");
            }

            $code = rand(000000, 999999);

            $new = new Agents;
            $new->position = $request->agent_type;
            $new->first_name = $request->first_name;
            $new->last_name = $request->last_name;
            $new->email = $request->email;
            $new->phone_number = $request->phone_number;
            $new->agency_name = $request->agency_name;
            $new->agenct_code = $request->agency_code;
            $new->agenct_address = $request->agency_address;
            $new->latitude = $request->latitude;
            $new->longitude = $request->longitude;
            $new->focused = lcfirst($request->focused_on);
            $new->password = Hash::make($request->password);
            $new->code = $code;
            $new->status = 0;
            $new->save();

            $emailAddress = $new->email;

            Mail::to($emailAddress)->send(new OTPVerification($code));

            $data = compact("emailAddress");

            return response($data, 200)->header("Content-type", "Application-json");

        } catch (\Throwable $th) {

            $message = "Something went wrong. Please try again later.";

            $data = compact("message");

            return response($data, 500)->header("Content-type", "Application/json");
        }

        $data = compact("request", "new");

        return response($data, 200)->header("Content-type", "Application/json");
    }

    public function verifyCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'email' => 'required|email',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422); // Unprocessable Entity
        }

        try {

            $info = Agents::where("email", $request->email)->first();

            if ($request->code == $info->code) {

                $info->status = 1;
                $info->save();

                session()->put("agent_id", $info->id);

                $data = compact("info");

                return response($data, 200)->header("Content-type", "Application/json");
            } else {

                $message = "Invalid code. Please try again.";
                $data = compact("message");

                return response($data, 400)->header("Content-type", "Application/json");
            }

        } catch (\Throwable $th) {

            $message = "Something went wrong. Please try again later.";

            $data = compact("message");

            return response($data, 500)->header("Content-type", "Application/json");
        }
    }

    public function userAgreement()
    {
        $title = "User Agreement";

        $data = compact("title");

        return view("template.useragreement")->with($data);
    }

    public function privacy()
    {
        $title = "Privacy Policy";

        $data = compact("title");

        return view("template.privacy")->with($data);
    }

    public function termsConditions()
    {
        $title = "Terms & Conditions";

        $data = compact("title");

        return view("template.terms")->with($data);
    }

    public function disclaimer()
    {
        $title = "Disclaimer";

        $data = compact("title");

        return view("template.disclaimer")->with($data);
    }

    public function login()
    {
        $title = "Login";

        $data = compact("title");

        return view("template.login")->with($data);
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {

            $checkAccount = Agents::where("email", $request->email)->exists();

            if ($checkAccount == false) {
                return redirect()->route("dashboard")->with("error", "No account found !");
            }

            $info = Agents::where("email", $request->email)->first();

            if ($info->status == 0) {
                return redirect()->back()->with("error", "Your account is not active. Please contact support.");
            }

            if (Hash::check($request->password, $info->password)) {
                session()->put("agent_id", $info->id);

                return redirect()->route("dashboard")->with("success", "Logged In Successfully!");

            } else {

                return redirect()->back()->with("error", "Invalid credentials. Please try again.");
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Pleaes try again later.");
        }
    }

    public function dashboard()
    {
        $title = "Dashboard";

        $data = compact("title");

        return view("template.dashboard")->with($data);
    }

    public function opportunities()
    {
        $title = "Opportunities";

        $list = assignLead::where("agent_id", session('agent_id'))->with("leadInfo")->latest()->get();

        $data = compact("title", "list");

        return view("template.opportunities")->with($data);
    }

    public function profile()
    {
        $title = "Profile";

        $data = compact("title");

        return view("template.profile")->with($data);
    }
    public function editprofile()
    {
        $title = "EditProfile";

        $agentDetails = Agents::find(session('agent_id'));

        $data = compact("title", "agentDetails");

        return view("template.editprofile")->with($data);
    }

    public function updateagencyLogo(Request $request)
    {

        // dd($request->all());

        $profileUpdate = Agents::find(session("agent_id"));
        if ($request->hasFile("cropped_image")) {
            $imageName = Str::random(16) . "." . $request->cropped_image->getClientOriginalExtension();
            $request->cropped_image->move(public_path("template/assets/Agencies/Agency-logo"), $imageName);
            $profileUpdate->agency_logo = $imageName;
        }
        $profileUpdate->save();
    }

    public function updateProfilePicture(Request $request)
    {

        $profileUpdate = Agents::find(session("agent_id"));
        if ($request->hasFile('cropped_image')) {
            // Generate a random file name with the original file extension
            $imageName = Str::random(16) . "." . $request->file('cropped_image')->getClientOriginalExtension();

            // Move the uploaded file to the specified directory
            $request->file('cropped_image')->move(public_path("template/assets/Profiles/Profile-Pictures"), $imageName);

            // Update the agency logo in the database
            $profileUpdate->profile_picture = $imageName;
        }
        $profileUpdate->save();
    }

    public function profileUpdate(Request $request)
    {

        $request->validate([
            "agency_name" => "required",
            "agency_code" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "phone_number" => "required",
            "address" => "required",
            "agency_commission" => "nullable",
            "marketting_budget" => "nullable",
            "sold_in_area" => "nullable",
            "average_sale_price" => "nullable",
            "about" => "nullable",
            "video_link" => "nullable",
            "city" => "nullable",
            "state" => "nullable",
            "country" => "nullable",
            "latitude" => "nullable",
            "longitude" => "nullable",
        ]);

        $profileUpdate = Agents::find(session("agent_id"));

        $profileUpdate->first_name = $request->first_name;
        $profileUpdate->last_name = $request->last_name;
        $profileUpdate->email = $request->email;
        $profileUpdate->phone_number = $request->phone_number;
        $profileUpdate->about = $request->about ?? "Lorem Ipsum";
        $profileUpdate->marketting_budget = $request->marketting_budget;
        $profileUpdate->agency_commission = $request->agency_commission;
        $profileUpdate->sold_in_area = $request->sold_in_area;
        $profileUpdate->average_sale_price = $request->average_sale_price;
        $profileUpdate->video_link = $request->video_link;
        $profileUpdate->city = $request->city;
        $profileUpdate->state = $request->state;
        $profileUpdate->country = $request->country;
        $profileUpdate->agenct_address = $request->address;
        $profileUpdate->latitude = $request->latitude;
        $profileUpdate->longitude = $request->longitude;
        $profileUpdate->agency_name = $request->agency_name;
        $profileUpdate->agenct_code = $request->agency_code;

        $profileUpdate->save();

        return redirect()->back()->with("success", "Congratulations! Profile Has Been Updated Successfully");
    }

    public function signout()
    {
        session()->forget("agent_id");

        return redirect()->route("agent.home")->with("success", "Logged Out Successfully !");
    }

    public function leadInfo($id)
    {

        $info = Leads::with("assignInfo")->find($id);

        $title = "Property ID:" . $info->code;

        $data = compact("title", "info");

        return view('template.viewdetail')->with($data);
    }

    public function uploadAgreement($id, Request $request)
    {

        $request->validate([
            "file" => "required|file",
        ]);

        try {

            $fileName = Str::random(16) . $id . '.' . $request->file->extension();
            $request->file->move(public_path('leadDocs'), $fileName);

            assignLead::where("id", $id)->update(["agreement" => $fileName]);

            return redirect()->back()->with("success", "Agreement doc has been updated !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function agreementView()
    {
        $title = "Agreement View";

        $info = Agents::find(session('agent_id'));

        $data = compact("title", "info");

        $pdf = PDF::loadView('template.agreement', $data);

        // Output the PDF in the browser
        return $pdf->stream("user-agreement.pdf");

        $data = compact("title");

        return view("template.agreement")->with($data);
    }

    public function forgetPassword()
    {
        $title = "Forget Password";

        $data = compact("title");

        return view("template.forgotpassword")->with($data);
    }

    public function postRequest(Request $request)
    {
        $request->validate([
            "email" => "required|email",
        ]);

        try {

            $checkExisting = Agents::where("email", $request->email)->exists();

            if ($checkExisting == false) {
                return redirect()->back()->with("error", "Account does not exist. Please try again later.");
            }

            $info = Agents::where("email", $request->email)->first();

            $code = rand(000000, 999999);

            Agents::where("id", $info->id)->update(["code" => $code]);

            Mail::to($info->email)->send(new OTPVerification($code));

            return redirect()->route("set.new.password", ['id' => $info->id])->with("success", "OTP has been sended to your email box. Please check.");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function changePassword($id)
    {
        $title = "Update Password";

        $info = Agents::find($id);

        $data = compact("title", "info");

        return view("template.newpassword")->with($data);
    }

    public function updateNewPassword($id, Request $request)
    {
        $request->validate([
            "code" => "required",
            "password" => "required",
            "confirmPassword" => "required|same:password",
        ]);

        try {

            $info = Agents::find($id);

            if ($request->code == $info->code) {
                Agents::where("id", $id)->update(["password" => Hash::make($request->password)]);

                return redirect()->route("agent.login")->with("success", "Password has been updated. Please login.");
            }

            return redirect()->back()->with("error", "Invalid code. Please try again.");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "description" => "required",
        ]);

        try {

            $new = new contactLeads;
            $new->name = ucfirst($request->name);
            $new->email = $request->email;
            $new->phone = $request->phone;
            $new->description = $request->description;
            $new->save();

            return redirect()->back()->with("success", "Thank you. We will get back to you soon.");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            "email" => "required|email",
        ]);

        try {

            $new = new Newsletter;
            $new->email = $request->email;
            $new->save();

            return redirect()->back()->with("success", "You have successfully subscribed to newsletter !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function urlLogin($id)
    {

        try {

            $checkExisting = Agents::where("url_code", $id)->exists();

            if ($checkExisting == false) {

                $message = "No login found. Please contact admin for further details.";

                $data = compact("message");

                return response()->json($data, 500);
            }

            $info = Agents::where("url_code", $id)->first();

            session()->put("agent_id", $info->id);

            return redirect()->route("dashboard")->with("success", "Logged in successfully !");

        } catch (\Throwable $th) {

            $message = "Something went wrong. Please try again later.";

            $data = compact("message");

            return response()->json($data, 500);
        }
    }

    public function updateFees(Request $request)
    {
        // dd($request->all());

        $request->validate([
            "agency_commission" => "nullable",
            "marketting_budget" => "nullable",
            "sold_in_area" => "nullable",
            "suburbs" => "nullable",
        ]);

        try {

            $suburbs = json_encode($request->suburb_name);

            // dd($suburbs);

            Agents::where("id", session('agent_id'))->update([
                "agency_commission" => $request->agency_commission,
                "marketting_budget" => $request->marketting_budget,
                "sold_in_area" => $request->sold_in_area,
                "average_sale_price" => $suburbs,
            ]);

            return redirect()->back()->with("success", "Fees marketing has been updated !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function updateVideoLink(Request $request)
    {
        $request->validate([
            "video_link" => "required|url",
        ]);

        try {

            Agents::where("id", session('agent_id'))->update([
                "video_link" => $request->video_link,
            ]);

            return redirect()->back()->with("success", "Video link has been update successfully !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function updateAddress(Request $request)
    {
        // dd($request->all());

        $request->validate([
            "address" => "required",
        ]);

        try {

            Agents::where("id", session('agent_id'))->update([
                "agenct_address" => $request->address,
                "latitude" => $request->latitude ?? null,
                "longitude" => $request->longitude ?? null,
            ]);

            return redirect()->back()->with("success", "Address has been updated successfully.");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            "password" => "required",
            "confirm_password" => "required|same:password",
        ]);

        try {

            Agents::where("id", session('agent_id'))->update([
                "password" => Hash::make($request->password),
            ]);

            return redirect()->back()->with("success", "Password has been updated successfully !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

}
