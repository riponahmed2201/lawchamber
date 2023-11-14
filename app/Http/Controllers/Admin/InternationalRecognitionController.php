<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InternationalRecognitionRequest;
use App\Models\InternationalRecognition;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternationalRecognitionController extends Controller
{
    public function index()
    {
        $results = DB::table('international_recognitions')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.international_recognition.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.international_recognition.form');
    }

    public function store(InternationalRecognitionRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        try {

            unset($input['_token']);

            InternationalRecognition::create($input);
            return redirect()->back()->with('success', 'International recognition created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = InternationalRecognition::findOrFail($id);

        return view('admin.international_recognition.form', $data);
    }

    public function update(InternationalRecognitionRequest $request, $id)
    {
        $data                   = InternationalRecognition::findOrFail($id);

        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        try {
            $data->update($input);
            return redirect(route('admin.international_recognition.index'))->with('success', 'International recognition updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = InternationalRecognition::findOrFail($request->international_recognition_id);

        $input['status'] = $request->status;

        try {
            $data->update($input);
            $bug = 0;
        } catch (\Exception $e) {
            return response()->json(['error', $e->getMessage()]);
        }

        if ($bug == 0) {
            return response()->json('success');
        } else {
            return response()->json('error');
        }
    }
}
