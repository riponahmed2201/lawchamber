<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientCategory;
use App\Models\Designation;
use App\Models\OurClient;
use App\Models\People;
use App\Models\PracticeAreas;
use App\Models\Resources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data['client_categories'] = ClientCategory::where('status', 'YES')->get();

        return view('frontend.home', $data);
    }

    public function showPeoplePage(Request $request)
    {
        $data['designations'] = Designation::where('status', 'YES')->get();

        $designation_id = $request->query('designation');

        $results = DB::table('peoples as a')
            ->leftJoin('designations as b', 'a.designation_id', '=', 'b.id')
            ->select('a.*', 'b.designation_name')
            ->where('a.status', 'YES');

        if (!empty($designation_id)) {
            $results = $results->where('a.designation_id', $designation_id);

            $data['getDesginationInfo'] = Designation::where('id', $designation_id)->first();
        }

        $data['peoples'] = $results->orderBy('id', 'ASC')->get();

        return view('frontend.people.index', $data);
    }

    public function showPeopleViewPage($people_id)
    {
        $people = DB::table('peoples as a')
            ->leftJoin('designations as b', 'a.designation_id', '=', 'b.id')
            ->select('a.*', 'b.designation_name')
            ->where('a.id', $people_id)
            ->first();

        return view('frontend.people.view', compact('people'));
    }

    public function showPracticesAreasPage()
    {
        $results = PracticeAreas::where('status', 'YES')->get();

        return view('frontend.practices_areas.index', compact('results'));
    }

    public function showPracticesAreasViewPage($id)
    {
        $data['practiceAreasList'] = PracticeAreas::where('status', 'YES')->get();

        $data['details'] = PracticeAreas::where('id', $id)->first();

        return view('frontend.practices_areas.view', $data);
    }

    public function showRecognitionPage()
    {
        return view('frontend.recognition.index');
    }

    public function showProBonoPage()
    {
        return view('frontend.pro_bono.index');
    }

    public function showResourcesPage()
    {
        $results = Resources::where('status', 'YES')->get();

        return view('frontend.resources.index', compact('results'));
    }

    public function viewResourcesDetails($resources_id)
    {
        $resources_data = Resources::where('id', $resources_id)->first();

        return view('frontend.resources.view', compact('resources_data'));
    }

    public function showPrivacyPolicyPage()
    {
        return view('frontend.pages.privacy_policy');
    }

    public function showTermsAndConditionsPage()
    {
        return view('frontend.pages.terms_conditions');
    }

    public function showAboutPage()
    {
        return view('frontend.about.index');
    }

    public function event()
    {
        $results = DB::table('events')->orderBy('id', 'DESC')->paginate(10);

        return view('frontend.event.index', compact('results'));
    }

    public function eventDetails($event_id)
    {
        $event = DB::table('events')->where('id', $event_id)->first();

        return view('frontend.event.details', compact('event'));
    }

    public function ourClientDetails($client_category_id)
    {
        $data['client_category'] = DB::table('client_categories')->where('id', $client_category_id)->first();

        $data['client_categories'] = ClientCategory::where('status', 'YES')->get();
        $data['our_clients'] = OurClient::where('category_id', $client_category_id)->get();

        return view('frontend.our_client.index', $data);
    }

    public function contactUs()
    {
        return view('frontend.contact.index');
    }
}
