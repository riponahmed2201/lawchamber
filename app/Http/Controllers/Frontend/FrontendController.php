<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view('frontend.people.index');
    }

    public function showPracticesAreasPage()
    {
        return view('frontend.practices_areas.index');
    }

    public function showRecognitionPage()
    {
        return view('frontend.recognition.index');
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
