<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variation;
use App\Models\VariationCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VariationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $data = VariationCategory::orderBy('id', 'desc')->get();
            return datatables::of($data)
                ->addColumn('product', function($data) {
                    if($data->product)
                        return $data->product->name;
                })->addColumn('variations', function($data) {
                    if($data->variations){
                        return '<span class="badge badge-pill badge-primary">'.$data->variations->count().'</span><a href="'.route('variationCreateBasedOnCategory', $data->id).'" class="btn btn-primary"><i class="feather icon-file-plus"></i> </a>';
                    }else{
                        return '<a href="'.route('variationCreateBasedOnCategory', $data->id).'" class="btn btn-primary"><i class="feather icon-file-plus"></i> </a>';
                    }
                })->addColumn('action', function($data) {
                    return '
                    <button onclick="editVariationCategory(\''.$data->id.'\',\''.$data->name.'\')" type="button" class="btn btn-info "><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('variationCategory.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['product','variations','action'])
                ->make(true);
        }else{
            return view('backend.variation.category-index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.variation.category-create', compact('products'));
    }

    public function createVariationCategoryWithProduct($product_id)
    {
        $products = Product::all();
        return view('backend.variation.category-create', compact('products','product_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'product' => 'required|exists:products,id',
        ]);
        $variation_category = new VariationCategory();

        $variation_category->name    =   $request->name;
        $variation_category->product_id   =  $request->product;
        $variation_category->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VariationCategory  $variationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VariationCategory $variationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VariationCategory  $variationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(VariationCategory $variationCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VariationCategory  $variationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VariationCategory $variationCategory)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $variation_category = $variationCategory;
        $variation_category->name    =   $request->name;
        try {
            $variation_category->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Updated done',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VariationCategory  $variationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VariationCategory $variationCategory)
    {
        try {
            if($variationCategory->variations){
                foreach($variationCategory->variations as $variation){
                    $variation->delete();
                }
            }
            $variationCategory->delete();
            return response()->json([
                'type' => 'success',
                'message' => '',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage(),
            ]);
        }
    }
    // variation Category Based On Product
    public function variationCategoryBasedOnProduct(Request $request)
    {
        if ($request->ajax()){
            $data = VariationCategory::orderBy('id', 'desc')->where('product_id' ,$request->product_id)->get();
            return datatables::of($data)
                ->addColumn('product', function($data) {
                    if($data->product)
                        return $data->product->name;
                })->addColumn('variations', function($data) {
                    if($data->variations){
                        return '<span class="badge badge-pill badge-primary">'.$data->variations->count().'</span><a href="'.route('createVariationWithCategory', $data->id).'" class="btn btn-primary"><i class="feather icon-file-plus"></i> </a>';
                    }else{
                        return '<a href="'.route('createVariationWithCategory', $data->id).'" class="btn btn-primary"><i class="feather icon-file-plus"></i> </a>';
                    }
                })->addColumn('action', function($data) {
                    return '
                    <button onclick="editVariationCategory(\''.$data->id.'\',\''.$data->name.'\')" type="button" class="btn btn-info "><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('variationCategory.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['product','variations','action'])
                ->make(true);
        }else{

        }
    }
}
