<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Eauction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('users')->where('status', 'YES')->count();
        $data['news'] = DB::table('news')->where('status', 'YES')->count();
        $data['practice_areas'] = DB::table('practice_areas')->where('status', 'YES')->count();
        $data['barristers'] = DB::table('barristers')->where('status', 'YES')->count();

        return view('admin.dashboard', $data);
    }
}
