<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class BackendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $activityLog =  Activity::all()->last();
        return view('backend.pages.dashboard',['activities'=>$activityLog]);
    }
}
