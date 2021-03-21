<?php

namespace App\Http\Controllers;

use App\Models\GlobalImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;

class GlobalImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = GlobalImage::all();
            return datatables::of($data)
                ->addColumn('image', function ($data) {
                    if ($data->image) {
                        return '<img height="70px;" class="rounded-circle" width="70px;" src="'.asset($data->image).'"/>';
                    }
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('globalImage.edit', $data) . '" class="btn btn-info"><i class="fa fa-edit"></i> </a>';
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        } else {
            return view('backend.setting.global-images');
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
            'image' => 'nullable|image',
        ]);
        $globalImage = new GlobalImage();
        $globalImage->name    =   $request->name;
        if($request->hasFile('image')){

            $image             = $request->file('image');
            $folder_path       = 'uploads/images/global/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $globalImage->image   = $folder_path . $image_new_name;
        }
        try {
            $globalImage->save();
            return back()->withToastSuccess('Successfully saved.');
        }catch (\Exception $exception){
            return back()->withErrors('Something going wrong. '.$exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GlobalImage  $globalImage
     * @return \Illuminate\Http\Response
     */
    public function show(GlobalImage $globalImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GlobalImage  $globalImage
     * @return \Illuminate\Http\Response
     */
    public function edit(GlobalImage $globalImage)
    {
        return view('backend.setting.global-image-edit', compact('globalImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GlobalImage  $globalImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GlobalImage $globalImage)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $globalImage->name    =   $request->name;
        if($request->hasFile('image')){
            if ($globalImage->image != null)
                File::delete(public_path($globalImage->image)); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/global/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $globalImage->image   = $folder_path . $image_new_name;
        }
        try {
            $globalImage->save();
            return back()->withToastSuccess('Successfully saved.');
        }catch (\Exception $exception){
            return back()->withErrors('Something going wrong. '.$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GlobalImage  $globalImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlobalImage $globalImage)
    {
        //
    }
}
