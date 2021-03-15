<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\VariationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class PosController extends Controller
{
    // pos
    public function pos(){
        $product_categories = ProductCategory::where('branch_id', Session::get('branch')->id)->get();
        return view('backend.pos.index', compact('product_categories'));
    }

    // get Variations By Product
    public function getVariationsByProduct($product_id){
        $variation_categories = Product::find($product_id)->variationCategories;

        $variations=array();
        foreach($variation_categories as $varriation_category){
            foreach($varriation_category->variations as $variation){
                array_push($variations, $variation);
            };
        }

        return Response::json([
             'variation_categories' => $variation_categories,
            //  'variations' => $variations,
        ]);

        // dd($variation_categories);

    }

}
