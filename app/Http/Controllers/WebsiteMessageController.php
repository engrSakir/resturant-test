<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class WebsiteMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::where('branch_id', Session::get('branch')->id)->get();
            return datatables::of($data)
                ->addColumn('status', function ($data) {
                    if ($data->is_process_complete == true) {
                        return '<span class="badge badge-pill badge-primary">Completed</span>';
                    } else {
                        return '<span class="badge badge-pill badge-danger">Incomplete</span>';
                    }
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('websiteMessage.show', $data) . '" class="btn btn-info"><i class="fa fa-eye"></i> </a>
                <button class="btn btn-danger" onclick="delete_function(this)" value="' . route('websiteMessage.destroy', $data) . '"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        } else {
            return view('backend.message.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact_us = ContactUs::findOrFail($id);
        return view('backend.message.show', compact('contact_us'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'status' => 'required'
        ]);

        $contact_us = ContactUs::findOrfail($id);
        $contact_us->is_process_complete = $request->status;
        try {
            $contact_us->save();
            return back()->withToastSuccess('Successfully updated');
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
        $contact_us  = ContactUs::findOrFail($id);
        try {
            $contact_us->delete();
            return response()->json([
                'type' => 'success',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => 'error'.$exception->getMessage(),
            ]);
        }
    }
}
