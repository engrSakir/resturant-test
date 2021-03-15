<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\VariationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PosController extends Controller
{
    // pos
    public function pos(){
        $product_categories = ProductCategory::where('branch_id', Session::get('branch')->id)->get();
        return view('backend.pos.index', compact('product_categories'));
    }

    // get Variations By Product
    public function getVariationsByProduct(Product $product){
        $var_categories = $product->variationCategories;

        $stack = array("");

        foreach($var_categories as $var_category){
            array_push($stack,$var_category->variations);
        }

        $var_categories = $product->variationCategories;

    }
}
