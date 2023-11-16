<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $results = DB::table('galleries')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.gallery.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.gallery.form');
    }

    public function store(GalleryRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $image = $request->file('image');

        if ($image) {
            $imageName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/gallery/', $imageName);
            $input['image'] = $imageName;
        }

        try {

            unset($input['_token']);

            Gallery::create($input);
            return redirect()->back()->with('success', 'Gallery created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Gallery::findOrFail($id);

        return view('admin.gallery.form', $data);
    }

    public function update(GalleryRequest $request, $id)
    {
        $gallery                = Gallery::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $image = $request->file('image');

        if ($image) {
            $imageName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/gallery/', $imageName);

            if (file_exists('uploads/gallery/' . $gallery->image) && !empty($gallery->image)) {
                unlink('uploads/gallery/' . $gallery->image);
            }

            $input['image'] = $imageName;
        }

        try {
            $gallery->update($input);
            return redirect(route('admin.gallery.index'))->with('success', 'Gallery updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Gallery::findOrFail($request->gallery_id);
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
