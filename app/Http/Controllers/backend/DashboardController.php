<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index(){
        $activities =  Activity::all();

        return view('backend.pages.dashboard',compact('activities'));
    }

    public function activityLogs(){
        $activities =  Activity::latest()->get();

        return response()->json($activities);


    }
}
