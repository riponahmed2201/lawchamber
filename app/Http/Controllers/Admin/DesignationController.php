<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesignationRequest;
use App\Models\Designation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DesignationController extends Controller
{
    public function index()
    {
        $results = DB::table('designations')->orderBy('id', 'ASC')->paginate(10);

        return view('admin.designation.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.designation.form');
    }

    public function store(DesignationRequest $request)
    {
        $input                  = $request->all();
        $input['slug']          = Str::slug($request->designation_name);
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        try {

            unset($input['_token']);

            Designation::create($input);
            return back()->with('success', 'Designation created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function edit($id)
    {
        $data['editModeData'] = Designation::findOrFail($id);
        return view('admin.designation.form', $data);
    }

    public function update(DesignationRequest $request, $id)
    {
        $designation            = Designation::findOrFail($id);
        $input                  = $request->all();
        $input['slug']          = Str::slug($request->designation_name);
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        try {
            $designation->update($input);
            return redirect(route('admin.designation.index'))->with('success', 'Designation updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Designation::findOrFail($request->designation_id);
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
