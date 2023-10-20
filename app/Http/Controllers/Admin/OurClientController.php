<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OurClientRequest;
use App\Models\ClientCategory;
use App\Models\OurClient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class OurClientController extends Controller
{
    public function index()
    {
        $results = DB::table('our_clients as a')
            ->leftJoin('client_categories as b', 'a.category_id', '=', 'b.id')
            ->select('a.*', 'b.name as category_name')
            ->orderBy('a.id', 'ASC')
            ->paginate(10);

        return view('admin.our_client.index', ['results' => $results]);
    }

    public function create()
    {
        $client_categories = ClientCategory::where('status', 'YES')->get();

        return view('admin.our_client.form', compact('client_categories'));
    }

    public function store(OurClientRequest $request)
    {

        $input                      = $request->all();
        $input['category_id']       = $request->category_name;
        $input['created_by']        = session('logged_session_data.id');
        $input['created_at']        = Carbon::now();

        $client_logo = $request->file('logo');

        if ($client_logo) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('logo')) . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move('uploads/our_client/', $imgName);
            $input['logo'] = $imgName;
        }

        try {

            unset($input['category_name']);
            unset($input['_token']);

            OurClient::create($input);
            return redirect()->back()->with('success', 'Client created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData']       = OurClient::findOrFail($id);
        $data['client_categories']  = ClientCategory::where('status', 'YES')->get();

        return view('admin.our_client.form', $data);
    }

    public function update(OurClientRequest $request, $id)
    {
        $our_client                 = OurClient::findOrFail($id);

        $input                      = $request->all();
        $input['category_id']       = $request->category_name;
        $input['updated_by']        = session('logged_session_data.id');
        $input['updated_at']        = Carbon::now();

        $our_client_logo = $request->file('logo');

        if ($our_client_logo) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('logo')) . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move('uploads/our_client/', $imgName);

            if (file_exists('uploads/our_client/' . $our_client->logo) && !empty($our_client->logo)) {
                unlink('uploads/our_client/' . $our_client->logo);
            }

            $input['logo'] = $imgName;
        }

        try {
            $our_client->update($input);
            return redirect(route('admin.our-client.index'))->with('success', 'Client updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data               = OurClient::findOrFail($request->client_id);
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
