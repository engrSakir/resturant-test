<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //dashboard
    public function index(){
        return view('backend.dashboard.index');
    }

}
