<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientCategoryRequest;
use App\Models\ClientCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientCategoryController extends Controller
{
    public function index()
    {
        $results = DB::table('client_categories')->orderBy('id', 'ASC')->paginate(10);

        return view('admin.client_category.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.client_category.form');
    }

    public function store(ClientCategoryRequest $request)
    {
        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        try {

            unset($input['_token']);

            ClientCategory::create($input);

            return back()->with('success', 'Client category created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function edit($id)
    {
        $data['editModeData'] = ClientCategory::findOrFail($id);

        return view('admin.client_category.form', $data);
    }

    public function update(ClientCategoryRequest $request, $id)
    {
        $designation            = ClientCategory::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        try {
            $designation->update($input);
            return redirect(route('admin.client-category.index'))->with('success', 'Client category updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = ClientCategory::findOrFail($request->client_category_id);
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
