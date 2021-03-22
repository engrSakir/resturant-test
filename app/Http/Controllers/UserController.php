<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();
            return datatables::of($data)
                ->addColumn('role', function ($data) {
                    if ($data->roles->count() > 0) {
                        $html = "";
                        foreach($data->roles as $role){
                            $html .='<span class="badge badge-pill badge-primary">'.$role->name.'</span>';
                        }
                        return $html;
                    }
                })->addColumn('avatar', function ($data) {
                    return '<img class="rounded-circle" height="70px;" width="70px;" src="'.asset($data->avatar ?? get_static_option('no_image')).'">';
                })->addColumn('status', function ($data) {
                    if ($data->is_active == true) {
                        return '<span class="badge badge-pill badge-primary">Active</span>';
                    } else {
                        return '<span class="badge badge-pill badge-danger">Inactive</span>';
                    }
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('user.edit', $data) . '" class="btn btn-info"><i class="fa fa-edit"></i> </a>';
                })
                ->rawColumns(['role','avatar','status', 'action'])
                ->make(true);
        } else {
            return view('backend.user.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $branches = Branch::all();
       return view('backend.user.create', compact('branches','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request->roles);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
            'status' => 'required',
            'password' => 'nullable|min:6',
            'branch' => 'required|exists:branches,id',
            'image' => 'nullable|image',
        ]);

        $user = new User();
        $user->name    =   $request->name;
        $user->email    =  $request->email;
        $user->phone    =  $request->phone;
        $user->is_active    =  $request->status;
        $user->branch_id    =  $request->branch;
        $user->password    =  Hash::make($request->password);

        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/users/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $user->avatar   = $folder_path . $image_new_name;
        }
        try {
            $user->save();
            if(!empty($request->roles)){
                foreach ($request->roles as $role){
                    $user->assignRole($role);
                }
            }
            return back()->withToastSuccess('Successfully saved.');
        }catch (\Exception $exception){
            return back()->withErrors('Something going wrong. '.$exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $branches = Branch::all();
        return view('backend.user.edit', compact('branches','roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,phone,'.$user->id,
            'phone' => 'required|string|unique:users,phone,'.$user->id,
            'status' => 'required',
            'password' => 'nullable|min:6',
            'branch' => 'required|exists:branches,id',
            'image' => 'nullable|image',
        ]);


        $user->name    =   $request->name;
        $user->email    =  $request->email;
        $user->phone    =  $request->phone;
        $user->is_active    =  $request->status;
        $user->branch_id    =  $request->branch;
        if ($request->password){
            $user->password    =  Hash::make($request->password);
        }

        if($request->hasFile('image')){
            if ($user->avatar != null)
                File::delete(public_path($user->avatar)); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/users/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $user->avatar   = $folder_path . $image_new_name;
        }
        try {
            $user->save();
            foreach ($user->roles as $role){
                $user->removeRole($role->name);
            }
            //$permission->removeRole($role);
            if(!empty($request->roles)){
                foreach ($request->roles as $role){
                    $user->assignRole($role);
                }
            }
            return back()->withToastSuccess('Successfully saved.');
        }catch (\Exception $exception){
            return back()->withErrors('Something going wrong. '.$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
