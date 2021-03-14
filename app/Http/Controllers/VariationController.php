<?php

namespace App\Http\Controllers;

use App\Models\Variation;
use App\Models\VariationCategory;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $data = Variation::orderBy('id', 'desc')->get();
            return datatables::of($data)
                ->addColumn('variation_category', function($data) {
                    if($data->variationCategory)
                        return '<span class="badge badge-pill badge-primary">'.$data->variationCategory->name.'</span>';
                })->addColumn('action', function($data) {
                    return '
                    <button onclick="editVariation(\''.$data->id.'\',\''.$data->name.'\',\''.$data->price.'\')" type="button" class="btn btn-info "><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('variationCategory.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['variation_category','action'])
                ->make(true);
        }else{
            return view('backend.variation.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createVariationWithCategory($category_id)
    {
        $variation_categoeies = VariationCategory::all();
        return view('backend.variation.create', compact('variation_categoeies','category_id'));
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
            'price' => 'required|string',
            'category' => 'required|exists:variation_categories,id',
        ]);
        $variation = new Variation();

        $variation->name    =   $request->name;
        $variation->price    =   $request->price;
        $variation->category_id   =  $request->category;
        $variation->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function show(Variation $variation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function edit(Variation $variation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variation $variation)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
        ]);
        $variation = $variation;

        $variation->name    =   $request->name;
        $variation->price    =   $request->price;
        try {
            $variation->save();
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
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variation $variation)
    {
        try {
            $variation->delete();
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

    //variation Create Based On Category
    public function variationCreateBasedOnCategory(Request $request){
        if ($request->ajax()){
            $data = Variation::orderBy('id', 'desc')->where('category_id' ,$request->category_id)->get();
            return datatables::of($data)
                ->addColumn('variation_category', function($data) {
                    if($data->variationCategory)
                        return '<span class="badge badge-pill badge-primary">'.$data->variationCategory->name.'</span>';
                })->addColumn('action', function($data) {
                    return '
                    <button onclick="editVariation(\''.$data->id.'\',\''.$data->name.'\',\''.$data->price.'\')" type="button" class="btn btn-info "><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('variation.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['variation_category','action'])
                ->make(true);
        }else{
            return view('backend.variation.index');
        }
    }
}
