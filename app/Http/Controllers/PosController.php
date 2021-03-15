<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\VariationCategory;
use Illuminate\Http\Request;

class PosController extends Controller
{
    //pos
    public function pos(){
        $products = Product::all();
        $product_categories = ProductCategory::all();
        return view('backend.pos.index', compact('products','product_categories'));
    }

    //get Variations By Product
    public function getVariationsByProduct(Product $product){
        $var_categories = $product->variationCategories;

        $stack = array("");

        foreach($var_categories as $var_category){
            array_push($stack,$var_category->variations);
        }

        $var_categories = $product->variationCategories;

    }
}
