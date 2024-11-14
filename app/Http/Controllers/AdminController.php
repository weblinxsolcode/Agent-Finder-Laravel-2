<?php

namespace App\Http\Controllers;

use App\Imports\leadImport;
use App\Models\Admins;
use App\Models\Agents;
use App\Models\assignLead;
use App\Models\contactLeads;
use App\Models\Leads;
use App\Models\Newsletter;
use App\Models\proprtyReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class AdminController extends Controller
{

    public function login()
    {
        $title = "Login";

        $data = compact("title");

        return view("admin.login")->with($data);
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        try {
            $emailCheck = $request->email;
            $passwordCheck = $request->password;

            $admin = Admins::where("email", $emailCheck)->first();

            if ($admin) {
                if (Hash::check($passwordCheck, $admin->password)) {
                    session()->put('admin_id', $admin->id);

                    return redirect()->route("admin.dashboard")->with("success", "Logged Successfully");
                } else {
                    return redirect()->back()->with("error", "Incorrect Password");
                }
            } else {
                return redirect()->back()->with("error", "Email Doesn't Exists");
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something Went Wrong!");
        }

    }

    public function logout()
    {
        try {
            session()->forget("admin_id");

            return redirect()->route("admin.login")->with("success", "Loggedout successfully !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function dashboard()
    {
        $title = "Dashboard";

        $agents = Agents::all();

        $leads = Leads::with("assignInfo")->get();

        $data = compact("title", "agents", "leads");

        return view("admin.index")->with($data);
    }

    public function agentManagement()
    {
        $title = "Agent Management";

        $list = Agents::latest()->get();

        $data = compact("title", "list");

        return view("admin.agent.index")->with($data);
    }

    public function addAgent()
    {
        $title = "Add Agent";

        $data = compact("title");

        return view("admin.agent.add")->with($data);
    }

    public function storeAgent(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|email",
            "phone_number" => "required",
            "agency_name" => "required",
            "agency_address" => "required",
            "agency_code" => "required",
            "focused" => "required",
            "latitude" => "nullable",
            "longitude" => "nullable",
            "password" => "required",
            'role' => 'required',
            "confirm_password" => "required|same:password",
        ]);

        try {

            $checkExisting = Agents::where("email", $request->email)->exists();

            if ($checkExisting == true) {
                return redirect()->back()->with("error", "Email already exists.");
            }

            $new = new Agents;
            $new->first_name = $request->first_name;
            $new->last_name = $request->last_name;
            $new->position = $request->role;
            $new->email = $request->email;
            $new->phone_number = $request->phone_number;
            $new->agency_name = $request->agency_name;
            $new->agenct_address = $request->agency_address;
            $new->agenct_code = $request->agency_code;
            $new->focused = $request->focused;
            $new->latitude = $request->latitude ?? null;
            $new->longitude = $request->longitude ?? null;
            $new->password = Hash::make($request->password);
            $new->status = 1;
            $new->save();

            return redirect()->route("admin.agent.management")->with("success", "Agent has been added successfully !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function editAgent($id)
    {
        $title = "Edit Agent";

        $item = Agents::find($id);

        $data = compact("title", "item", "id");

        return view("admin.agent.edit")->with($data);
    }
    public function test()
    {
        $title = "test";

        // $item = Agents::find($id);

        $data = compact("title");

        return view("admin.agent.test")->with($data);
    }

    public function updateAgent($id, Request $request)
    {
        // dd($request->all());

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'role' => 'required',
            'agency_name' => 'required',
            'agency_address' => 'required',
            'agency_code' => 'required',
            "latitude" => "nullable",
            "longitude" => "nullable",
            'password' => 'nullable|same:confirm_password', // Ensures password matches confirm_password or both can be left empty
            'confirm_password' => 'nullable',
        ]);

        try {

            if ($request->cropped_image) {
                $imageData = file_get_contents($request->cropped_image);
                $fileName = Str::random(16) . $id . '.png';
                file_put_contents(public_path('template/assets/Profiles/Profile-Pictures/' . $fileName), $imageData);

                Agents::where('id', $id)->update([
                    'profile_picture' => $fileName,
                ]);
            }

            if ($request->agency_logo != null && $request->file("agency_logo")) {
                $fileName = Str::random() . '.' . $request->agency_logo->extension();
                $request->agency_logo->move(public_path('template/assets/Agencies/Agency-logo'), $fileName);

                Agents::where("id", $id)->update([
                    "agency_logo" => $fileName,
                ]);
            }

            if ($request->password != null && $request->confirm_password != null) {
                Agents::where("id", $id)->update([
                    "first_name" => $request->first_name,
                    "last_name" => $request->last_name,
                    "phone_number" => $request->phone_number,
                    "agency_name" => $request->agency_name,
                    "agenct_address" => $request->agency_address,
                    "agenct_code" => $request->agency_code,
                    "focused" => $request->focused,
                    "latitude" => $request->latitude,
                    "longitude" => $request->longitude,
                    "position" => $request->role,
                    "agency_commission" => $request->agency_commission,
                    "marketting_budget" => $request->marketting_budget,
                    "sold_in_area" => $request->sold_in_area,
                    "average_sale_price" => json_encode($request['suburb']),
                    "video_link" => $request->video_link,

                    "password" => Hash::make($request->password),
                ]);
            } else {
                Agents::where("id", $id)->update([
                    "first_name" => $request->first_name,
                    "last_name" => $request->last_name,
                    "phone_number" => $request->phone_number,
                    "agency_name" => $request->agency_name,
                    "agenct_address" => $request->agency_address,
                    "agenct_code" => $request->agency_code,
                    "focused" => $request->focused,
                    "latitude" => $request->latitude,
                    "longitude" => $request->longitude,
                    "position" => $request->role,
                    "agency_commission" => $request->agency_commission,
                    "marketting_budget" => $request->marketting_budget,
                    "sold_in_area" => $request->sold_in_area,
                    "average_sale_price" => json_encode($request['suburb']),
                    "video_link" => $request->video_link,
                ]);
            }

            return redirect()->route("admin.agent.management")->with("success", "Agent has been updated successfully !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function deleteAgent($id)
    {
        try {

            Agents::find($id)->delete();

            return redirect()->back()->with("success", "Agent has been deleted successfully !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function updateAgentStatus($id, Request $request)
    {
        $request->validate([
            "status" => "required",
        ]);

        try {

            Agents::where("id", $id)->update([
                "status" => $request->status,
            ]);

            return redirect()->back()->with("success", "Status has been updated !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function agentProfile($id)
    {
        $info = Agents::with("assignedLeads")->find($id);

        $title = "Profile";

        $data = compact("title", "info");

        return view("admin.agent.profile")->with($data);
    }

    public function leadManagement()
    {
        $title = "Lead Management";

        $list = Leads::latest()->get();

        $data = compact("title", "list");

        return view("admin.leads.index")->with($data);
    }

    public function addLead()
    {
        $title = "Add Lead";

        $data = compact("title");

        return view("admin.leads.add")->with($data);
    }

    public function storeLead(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'prupose' => 'required',
            'type' => 'required',
            'duration' => 'required',
            "bedroom" => 'nullable',
        ]);

        try {

            $code = "#" . rand(000000, 999999);

            $new = new Leads;
            $new->code = $code;
            $new->first_name = $request->first_name;
            $new->last_name = $request->last_name;
            $new->phone = $request->phone;
            $new->email = $request->email;
            $new->address = $request->address;
            $new->purpose = $request->prupose;
            $new->type = $request->type;
            $new->duration = $request->duration;
            $new->bedroom = $request->bedroom;
            $new->lat = $request->lat ?? null;
            $new->long = $request->long ?? null;
            $new->save();

            return redirect()->route("admin.lead.management")->with("success", "Lead has been added successfully !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function deleteLead($id)
    {
        try {

            Leads::find($id)->delete();

            return redirect()->back()->with("success", "Lead has been deleted successfully !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function editLead($id)
    {
        $title = "Edit Lead";

        $item = Leads::find($id);

        $data = compact("title", "item");

        return view("admin.leads.edit")->with($data);
    }

    public function updateLead($id, Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'prupose' => 'required',
            'type' => 'required',
            'duration' => 'required',
            "bedroom" => 'nullable',
        ]);

        try {
            $lead = Leads::findOrFail($id);

            $lead->first_name = $request->first_name;
            $lead->last_name = $request->last_name;
            $lead->phone = $request->phone;
            $lead->email = $request->email;
            $lead->address = $request->address;
            $lead->purpose = $request->prupose;
            $lead->type = $request->type;
            $lead->duration = $request->duration;
            $lead->bedroom = $request->bedroom;
            $lead->lat = $request->lat ?? null;
            $lead->long = $request->long ?? null;
            $lead->update();

            return redirect()->route("admin.lead.management")->with("success", "Lead has been updated successfully!");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function leadDetails($id)
    {
        $title = "Lead Details";

        $item = Leads::find($id);

        $data = compact("title", "item");

        return view("admin.leads.details")->with($data);

    }

    public function importLead(Request $request)
    {
        $request->validate([
            "file" => "required|mimes:xlsx",
        ]);

        $data = Excel::toArray(new leadImport, $request->file('file'));

        foreach ($data as $item1) {
            foreach ($item1 as $item) {
                $first_name = (string) $item['first_name'];
                $last_name = (string) $item['last_name'];
                $email = (string) $item['email'];
                $phone = (string) $item['phone'];
                $address = (string) $item['address_property_address'];
                $purpose = (string) $item['purpose_sellrent'];
                $type = (string) $item['type_house_unittown_land_other'];
                $duration = (string) $item['duration_months'];
                $bedroom = (string) $item['bedroom'];

                $code = "#" . rand(000000, 999999);

                $new = new Leads;
                $new->code = $code;
                $new->first_name = $first_name;
                $new->last_name = $last_name;
                $new->phone = $phone;
                $new->email = $email;
                $new->address = $address;
                $new->purpose = $purpose;
                $new->type = $type;
                $new->duration = $duration;
                $new->bedroom = $bedroom;
                $new->save();
            }
        }

        return redirect()->back()->with("success", "All the leads has been imported successfully !");

    }

    public function assignedLeads()
    {
        $title = "Assigned Leads";

        $list = Leads::whereHas("assignInfo")->with("assignInfo")->latest()->get();

        // dd($list);

        $data = compact("title", "list");

        return view("admin.assign.assigned")->with($data);
    }

    public function unassignedLeads()
    {
        $title = "Unassigned Leads";

        $list = Leads::whereDoesntHave("assignInfo")->with("assignInfo")->latest()->get();

        $agents = Agents::where("status", 1)->latest()->get();

        $data = compact("title", "list", "agents");

        return view("admin.assign.unassigned")->with($data);

    }

    public function assignLead($id, Request $request)
    {
        $request->validate([
            "agent_id" => "required",
        ]);

        try {

            $checkExisting = assignLead::where("lead_id", $id)->exists();

            if ($checkExisting == true) {
                return redirect()->back()->with("error", "This lead has already assigned !");
            }

            $new = new assignLead;
            $new->agent_id = $request->agent_id;
            $new->lead_id = $id;
            $new->status = 0;
            $new->save();

            return redirect()->back()->with("success", "Lead has been assigned successfully !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function removeAssign($id)
    {
        try {

            assignLead::find($id)->delete();

            return redirect()->back()->with("success", "Lead has been removed from the agent !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function adminProfile()
    {
        $title = "Profile";

        $info = Admins::find(session('admin_id'));

        $data = compact("title", "info");

        return view("admin.profile")->with($data);
    }

    public function updateAdminProfile(Request $request)
    {
        // dd($request->all());

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "nullable",
            "confirm_password" => "nullable|same:password",
        ]);

        try {

            if ($request->password != null && $request->confirm_password != null) {
                Admins::where("id", session('admin_id'))->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                ]);
            } else {

                Admins::where("id", session('admin_id'))->update([
                    "name" => $request->name,
                    "email" => $request->email,
                ]);

            }

            return redirect()->back()->with("success", "Profile has been updated !");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function agreementView($id)
    {
        $title = "Agreement View";

        $info = Agents::find($id);

        $name = $info->first_name . $info->last_name . "-agreement.pdf";

        $data = compact("title", "info");

        $pdf = PDF::loadView('template.agreement', $data);

        return $pdf->download($name);

        // $data = compact("title");

        // return view("template.agreement")->with($data);
    }

    public function newsletterManagement()
    {
        $title = "Newsletter Management";

        $list = Newsletter::latest()->get();

        $data = compact("title", "list");

        return view("admin.newsletter.index")->with($data);
    }

    public function deleteNewsLetter($id)
    {
        try {

            Newsletter::find($id)->delete();

            return redirect()->back()->with("success", "Newsletter has been deleted successfully !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function contactManagement()
    {
        $title = "Contact Management";

        $list = contactLeads::latest()->get();

        $data = compact("title", "list");

        return view("admin.contact.index")->with($data);
    }

    public function deleteContact($id)
    {
        try {

            contactLeads::find($id)->delete();

            return redirect()->back()->with("success", "Contact has been deleted successfully !");

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function contactDetails($id)
    {
        $title = "Contact Details";

        $item = contactLeads::find($id);

        $data = compact("title", "item");

        return view("admin.contact.details")->with($data);
    }

    public function propertReportManagement()
    {
        $title = "Property Report Management";

        $list = proprtyReport::latest()->get();

        $data = compact("title", "list");

        return view("admin.property.index")->with($data);
    }

    public function propertyReportDetals($id)
    {
        $title = "Property Report Details";

        $item = proprtyReport::find($id);

        $data = compact("title", "item");

        return view("admin.property.details")->with($data);
    }

    public function deletePropertyReport($id)
    {
        try {

            proprtyReport::find($id)->delete();

            return redirect()->back()->with("success", "Propert report has been deleted .");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong. Please try again later.");
        }
    }

    public function templateProfile($id)
    {
        $title = "User Profile";

        $data = compact("title", "id");

        return view("template.admin-profile")->with($data);
    }

}
