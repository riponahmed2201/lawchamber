<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarristersRequest;
use App\Models\Barristers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BarristersController extends Controller
{
    public function index()
    {
        $results = DB::table('barristers')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.barristers.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.barristers.form');
    }

    public function store(BarristersRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $barristers_image = $request->file('image');

        if ($barristers_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/barristers/', $imgName);
            $input['image'] = $imgName;
        }

        try {

            unset($input['_token']);

            Barristers::create($input);
            return redirect()->back()->with('success', 'Barristers created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Barristers::findOrFail($id);

        return view('admin.barristers.form', $data);
    }

    public function update(BarristersRequest $request, $id)
    {
        $barristers             = Barristers::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $barristers_image = $request->file('image');

        if ($barristers_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/barristers/', $imgName);

            if (file_exists('uploads/barristers/' . $barristers->image) && !empty($barristers->image)) {
                unlink('uploads/barristers/' . $barristers->image);
            }

            $input['image'] = $imgName;
        }

        try {
            $barristers->update($input);
            return redirect(route('admin.barristers.index'))->with('success', 'Barristers updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Barristers::findOrFail($request->barristers_id);
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
