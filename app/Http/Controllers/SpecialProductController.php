<?php

namespace App\Http\Controllers;

use App\Models\SpecialProduct;
use Illuminate\Http\Request;

class SpecialProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $special_products = SpecialProduct::all();
        return view('backend.special-product.index', compact('special_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.special-product.create');
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
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $special_product = new SpecialProduct();
        $special_product->title = $request->title;
        $special_product->description = $request->description;

        try {
            $special_product->save();
            return back()->withSuccess('Uploaded successfully!');
        } catch (\Exception $exception) {
            return back()->withErrors('Something went wrong !' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpecialProduct  $specialProduct
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialProduct $specialProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpecialProduct  $specialProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecialProduct $specialProduct)
    {
        return view('backend.special-product.edit', compact('specialProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpecialProduct  $specialProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecialProduct $specialProduct)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $special_product = $specialProduct;
        $special_product->title = $request->title;
        $special_product->description = $request->description;

        try {
            $special_product->save();
            return back()->withSuccess('Updated successfully!');
        } catch (\Exception $exception) {
            return back()->withErrors('Something went wrong !' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpecialProduct  $specialProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialProduct $specialProduct)
    {
        try {
            $specialProduct->delete();
            return response()->json([
                'type' => 'success',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'type' => 'error',
                'message' => 'error' . $exception->getMessage(),
            ]);
        }
    }
}
