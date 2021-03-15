<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    // contact Us
    public function contactUs(){
        $branches = Branch::all();
        return view('frontend.contact-us', compact('branches'));
    }

    // contact Us Store
    public function contactUsStore(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'required|string',
            'message' => 'required|string',
            'branch' => 'required|exists:branches,id',
        ]);

        $contact_us = new ContactUs();
        $contact_us->name    =   $request->name;
        $contact_us->email    =   $request->email;
        $contact_us->phone    =   $request->phone;
        $contact_us->message    =  $request->message;
        $contact_us->branch_id    =  $request->branch;

        try {
            $contact_us->save();
            return back()->withToastSuccess('Message sent successfully');
        }catch (\Exception $exception){
            return back()->withErrors('Something going wrong. '.$exception->getMessage());
        }
    }
}
