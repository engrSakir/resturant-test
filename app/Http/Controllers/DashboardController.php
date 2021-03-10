<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     //branch
     public function branch(){
        return view('backend.dashboard.branch');
    }

    //dashboard
    public function index(){
        return view('backend.dashboard.index');
    }

}
