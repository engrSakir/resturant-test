<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    // contact Us
    public function contactUs(){
        return view('frontend.contact-us');
    }
}
