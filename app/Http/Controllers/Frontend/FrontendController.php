<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\People;
use App\Models\PracticeAreas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function showPeoplePage()
    {
        $data['designations'] = Designation::where('status', 'YES')->get();

        $data['peoples'] = DB::table('peoples as a')
            ->leftJoin('designations as b', 'a.designation_id', '=', 'b.id')
            ->select('a.*', 'b.designation_name')
            ->where('a.status', 'YES')
            ->orderBy('id', 'ASC')
            ->get();
        dd($data['peoples']);

        return view('frontend.people.index', $data);
    }

    public function showPracticesAreasPage()
    {
        $results = PracticeAreas::where('status', 'YES')->get();

        return view('frontend.practices_areas.index', compact('results'));
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
        return view('frontend.resources.index');
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

    public function contactUs()
    {
        return view('frontend.contact.index');
    }
}
