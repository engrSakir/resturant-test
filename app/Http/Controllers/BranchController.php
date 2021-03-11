<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::orderBy('serial', 'asc')->get();
        return view('backend.branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.branch.create');
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
            'email' => 'nullable|string',
            'phone'   => 'nullable|string',
            'address'   => 'required|string',
            'opening_time' => 'nullable|string',
            'serial' => 'required|unique:branches,serial',
            'image' => 'nullable|image',
            'logo' => 'nullable|image',
        ]);
        $branch = new Branch();
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->phone = $request->phone;
        $branch->address = $request->address;
        $branch->opening_time = $request->opening_time;
        $branch->serial = $request->serial;

        if($request->hasFile('image')){

            $image             = $request->file('image');
            $folder_path       = 'uploads/images/branch/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $branch->image   = $folder_path . $image_new_name;
        }
        if($request->hasFile('logo')){
            $image             = $request->file('logo');
            $folder_path       = 'uploads/images/branch/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $branch->logo   = $folder_path . $image_new_name;
        }
        try {
            $branch->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully stored.',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => 'Oops.. something went wrong'.$exception->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('backend.branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|string',
            'phone'   => 'nullable|string',
            'address'   => 'required|string',
            'opening_time' => 'nullable|string',
            'serial' => 'required|unique:branches,serial,'.$branch->id,
            'image' => 'nullable|image',
            'logo' => 'nullable|image',
        ]);
        $branch = $branch;
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->phone = $request->phone;
        $branch->address = $request->address;
        $branch->opening_time = $request->opening_time;
        $branch->serial = $request->serial;

        if($request->hasFile('image')){
            if ($branch->image != null)
                File::delete(public_path($branch->image)); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/branch/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $branch->image   = $folder_path . $image_new_name;
        }
        if($request->hasFile('logo')){
            if ($branch->logo != null)
                File::delete(public_path($branch->logo)); //Old image delete
            $image             = $request->file('logo');
            $folder_path       = 'uploads/images/branch/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $branch->logo   = $folder_path . $image_new_name;
        }
        try {
            $branch->save();
            return back()->withToastSuccess('Successfully updated');
        }catch (\Exception $exception){
            return back()->withErrors('Something going wrong. '.$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        try {
            if($branch->image != null)
                File::delete(public_path($branch->image)); //Old image delete
            if($branch->logo != null)
                File::delete(public_path($branch->logo)); //Old logo delete
            $branch->delete();
            return response()->json([
                'type' => 'success',
                'url' => route('branch.index'),
            ]);
        }catch (\Exception$exception){
            return response()->json([
                'type' => 'error',
            ]);
        }
    }
}
