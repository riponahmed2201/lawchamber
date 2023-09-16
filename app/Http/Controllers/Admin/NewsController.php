<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $results = DB::table('news')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.news.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.news.form');
    }

    public function store(NewsRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $news_image = $request->file('image');

        if ($news_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/news/', $imgName);
            $input['image'] = $imgName;
        }

        try {

            unset($input['_token']);

            News::create($input);
            return redirect()->back()->with('success', 'News created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = News::findOrFail($id);

        return view('admin.news.form', $data);
    }

    public function update(NewsRequest $request, $id)
    {
        $news                   = News::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $news_image = $request->file('image');

        if ($news_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/news/', $imgName);

            if (file_exists('uploads/news/' . $news->image) && !empty($news->image)) {
                unlink('uploads/news/' . $news->image);
            }

            $input['image'] = $imgName;
        }

        try {
            $news->update($input);
            return redirect(route('admin.news.index'))->with('success', 'News updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = News::findOrFail($request->news_id);
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
