<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PracticeAreasRequest;
use App\Models\PracticeAreas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PracticeAreasController extends Controller
{
    public function index()
    {
        $results = DB::table('practice_areas')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.practice_areas.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.practice_areas.form');
    }

    public function store(PracticeAreasRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $news_image = $request->file('image');

        if ($news_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/practice_areas/', $imgName);
            $input['image'] = $imgName;
        }

        try {

            unset($input['_token']);

            PracticeAreas::create($input);
            return redirect()->back()->with('success', 'Practice areas created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = PracticeAreas::findOrFail($id);

        return view('admin.practice_areas.form', $data);
    }

    public function update(PracticeAreasRequest $request, $id)
    {
        $practice_areas         = PracticeAreas::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $practice_areas_image = $request->file('image');

        if ($practice_areas_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/practice_areas/', $imgName);

            if (file_exists('uploads/practice_areas/' . $practice_areas->image) && !empty($practice_areas->image)) {
                unlink('uploads/practice_areas/' . $practice_areas->image);
            }

            $input['image'] = $imgName;
        }

        try {
            $practice_areas->update($input);
            return redirect(route('admin.practice_areas.index'))->with('success', 'Practice areas updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = PracticeAreas::findOrFail($request->practice_areas_id);
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
