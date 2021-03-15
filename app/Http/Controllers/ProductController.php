<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $data = Product::orderBy('id', 'desc')->get();
            return datatables::of($data)
                ->addColumn('category', function($data) {
                    if($data->productCategory)
                        return $data->productCategory->name;
                })->addColumn('image', function($data) {
                    return '<img class="rounded-circle" height="70px;" width="70px;"; src="'.asset($data->image ?? get_static_option('no_image')).'" alt="">';
                })->addColumn('variation_category', function($data) {
                    if($data->variationCategories){
                        $list = "";
                        foreach($data->variationCategories as $variationCategory){
                            $list .= '<br><span class="badge badge-pill badge-primary">'.$variationCategory->name.'</span>';
                        }
                        return '<a href="'.route('createVariationCategoryWithProduct', $data->id).'" class="btn btn-warning"><i class="feather icon-plus-circle"></i> </a>'. $list;
                    }else{
                        return '<a href="'.route('createVariationCategoryWithProduct', $data->id).'" class="btn btn-warning"><i class="feather icon-plus-circle"></i> </a>';
                    }
                })->addColumn('action', function($data) {
                    return '<a href="'.route('product.edit', $data).'" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('product.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['category','image','variation_category','action'])
                ->make(true);
        }else{
            return view('backend.product.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::where('status', true)->get();
        return view('backend.product.create', compact('product_categories'));
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
            'category' => 'required|exists:product_categories,id',
            'name' => 'required|string',
            'price' => 'nullable|string',
            'status' => 'nullable',
            'image' => 'nullable|image',
        ]);
        $product = new Product();

        $product->name    =   $request->name;
        $product->category_id    =   $request->category;
        $product->price    =  $request->price;

        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/product/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $product->image   = $folder_path . $image_new_name;
        }

        $product->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product_categories = ProductCategory::where('status', true)->get();
        return view('backend.product.edit', compact('product_categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category' => 'required|exists:product_categories,id',
            'name' => 'required|string',
            'price' => 'nullable|string',
            'status' => 'nullable',
            'image' => 'nullable|image',
        ]);
        $product = $product;

        $product->name    =   $request->name;
        $product->category_id    =   $request->category;
        $product->price    =  $request->price;

        if($request->hasFile('image')){
            if ($product->image != null)
                File::delete(public_path($product->image)); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/product/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $product->image   = $folder_path . $image_new_name;
        }

        $product->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            if ($product->image != null)
                File::delete(public_path($product->image)); //Old image delete
            $product->delete();
            return response()->json([
                'type' => 'success',
            ]);
        }catch (\Exception$exception){
            return response()->json([
                'type' => 'error',
            ]);
        }
    }
}
