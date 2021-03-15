<?php

namespace App\Http\Controllers;

use App\Models\WebsitePromotion;
use Database\Seeders\WebsitePromotionSeeder;
use Illuminate\Http\Request;

class WebsitePromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = WebsitePromotion::all();
        return view('backend.promotion.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.promotion.create');
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
            'highlight' => 'required|min:3',
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $promotion = new WebsitePromotion();
        $promotion->highlight = $request->highlight;
        $promotion->title = $request->title;
        $promotion->description = $request->description;

        try {
            $promotion->save();
            return back()->withSuccess('Uploaded successfully!');
        } catch (\Exception $exception) {
            return back()->withErrors('Something went wrong !' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebsitePromotion  $websitePromotion
     * @return \Illuminate\Http\Response
     */
    public function show(WebsitePromotion $websitePromotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebsitePromotion  $websitePromotion
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsitePromotion $websitePromotion)
    {
        return view('backend.promotion.edit', compact('websitePromotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebsitePromotion  $websitePromotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsitePromotion $websitePromotion)
    {
        $request->validate([
            'highlight' => 'required|min:3',
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $promotion = $websitePromotion;
        $promotion->highlight = $request->highlight;
        $promotion->title = $request->title;
        $promotion->description = $request->description;

        try {
            $promotion->save();
            return back()->withSuccess('Updated successfully!');
        } catch (\Exception $exception) {
            return back()->withErrors('Something went wrong !' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebsitePromotion  $websitePromotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsitePromotion $websitePromotion)
    {
        try {
            $websitePromotion->delete();
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
