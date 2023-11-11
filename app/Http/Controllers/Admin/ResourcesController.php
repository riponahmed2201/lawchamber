<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResourcesRequest;
use App\Models\Resources;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResourcesController extends Controller
{
    public function index()
    {
        $results = DB::table('resources')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.resources.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.resources.form');
    }

    public function store(ResourcesRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $resources_image = $request->file('image');

        if ($resources_image) {
            $imageName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/resources/', $imageName);
            $input['image'] = $imageName;
        }

        try {

            unset($input['_token']);

            Resources::create($input);
            return redirect()->back()->with('success', 'Resources created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Resources::findOrFail($id);

        return view('admin.resources.form', $data);
    }

    public function update(ResourcesRequest $request, $id)
    {
        $resources              = Resources::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $resources_image = $request->file('image');

        if ($resources_image) {
            $imageName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/resources/', $imageName);

            if (file_exists('uploads/resources/' . $resources->image) && !empty($resources->image)) {
                unlink('uploads/resources/' . $resources->image);
            }

            $input['image'] = $imageName;
        }

        try {
            $resources->update($input);
            return redirect(route('admin.resources.index'))->with('success', 'Resources updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Resources::findOrFail($request->resources_id);
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
