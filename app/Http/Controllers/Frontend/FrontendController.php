<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientCategory;
use App\Models\Designation;
use App\Models\InternationalRecognition;
use App\Models\News;
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
        $data['clientList'] = OurClient::where('status', 'YES')->get();

        $data['news_updates'] =   News::where('status', 'YES')->orderBy('id', 'DESC')->take(3)->get();

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

    public function showRecognitionPage(Request $request)
    {
        $year_name = $request->query('yearName');

        $data['year_name_list'] = InternationalRecognition::orderBy('id', 'DESC')->where('status', 'YES')->get();

        $results = InternationalRecognition::where('status', 'YES');

        $data['getRecognitionInfo'] = InternationalRecognition::orderBy('id', 'DESC')->where('status', 'YES')->first();

        if (!empty($year_name)) {
            $results = $results->where('year_name', $year_name);

            $data['getRecognitionInfo'] = InternationalRecognition::where('year_name', $year_name)->first();
        }

        return view('frontend.recognition.index', $data);
    }

    public function showProBonoPage()
    {
        return view('frontend.pro_bono.index');
    }

    public function showGalleryPage()
    {
        $results = DB::table('galleries')->orderBy('id', 'DESC')->where('status', 'YES')->get();

        return view('frontend.gallery.index', compact('results'));
    }

    public function showResourcesPage()
    {
        $results = Resources::where('status', 'YES')->orderBy('id', 'DESC')->get();

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

    public function newsAndUpdates()
    {
        $results = News::where('status', 'YES')->orderBy('id', 'DESC')->get();

        return view('frontend.news_updates.index', compact('results'));
    }

    public function newsAndUpdatesDetails($resources_id)
    {
        $news_data = News::where('id', $resources_id)->first();

        return view('frontend.news_updates.details', compact('news_data'));
    }

    public function ourClientDetails(Request $request)
    {

        $data['client_category'] = DB::table('client_categories')->orderBy('id', 'ASC')->first();

        $client = $request->query('client');

        $data['client_categories'] = ClientCategory::orderBy('id', 'ASC')->where('status', 'YES')->get();

        $data['our_clients'] = OurClient::orderBy('id', 'DESC')->where('category_id', $data['client_category']->id)->get();

        if (!empty($client)) {

            $data['client_category'] = DB::table('client_categories')->where('id', $client)->first();
            $data['our_clients'] = OurClient::orderBy('id', 'DESC')->where('category_id', $client)->get();
        }

        return view('frontend.our_client.index', $data);
    }

    public function contactUs()
    {
        return view('frontend.contact.index');
    }
}
