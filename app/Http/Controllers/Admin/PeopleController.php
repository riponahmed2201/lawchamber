<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleRequest;
use App\Models\Designation;
use App\Models\People;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    public function index()
    {
        $results = DB::table('peoples as a')
            ->leftJoin('designations as b', 'a.designation_id', '=', 'b.id')
            ->select('a.*', 'b.designation_name')
            ->orderBy('a.id', 'ASC')
            ->paginate(10);

        return view('admin.people.index', ['results' => $results]);
    }

    public function create()
    {
        $designations = Designation::where('status', 'YES')->get();

        return view('admin.people.form', compact('designations'));
    }

    public function store(PeopleRequest $request)
    {

        $input                      = $request->all();
        $input['designation_id']    = $request->designation_name;
        $input['created_by']        = session('logged_session_data.id');
        $input['created_at']        = Carbon::now();

        $people_image = $request->file('image');

        if ($people_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/people/', $imgName);
            $input['image'] = $imgName;
        }

        try {

            unset($input['designation_name']);
            unset($input['_token']);

            People::create($input);
            return redirect()->back()->with('success', 'People created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = People::findOrFail($id);
        $data['designations'] = Designation::where('status', 'YES')->get();

        return view('admin.people.form', $data);
    }

    public function update(PeopleRequest $request, $id)
    {
        $People                     = People::findOrFail($id);
        $input                      = $request->all();
        $input['designation_id']    = $request->designation_name;
        $input['updated_by']        = session('logged_session_data.id');
        $input['updated_at']        = Carbon::now();

        $People_image = $request->file('image');

        if ($People_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/people/', $imgName);

            if (file_exists('uploads/People/' . $People->image) && !empty($People->image)) {
                unlink('uploads/People/' . $People->image);
            }

            $input['image'] = $imgName;
        }

        try {
            $People->update($input);
            return redirect(route('admin.people.index'))->with('success', 'People updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data               = People::findOrFail($request->people_id);
        $input['status']    = $request->status;

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
