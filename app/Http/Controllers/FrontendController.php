<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Branch;
use App\Models\ContactUs;
use App\Models\CustomPage;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Product;
use App\Models\SpecialProduct;
use App\Models\Subscriber;
use App\Models\WebsitePromotion;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $partners = Partner::orderBy('id', 'desc')->limit(6)->get();
        $blogs = Blog::where('is_active', true)->orderBy('id', 'desc')->limit(6)->get();
        $products = Product::orderBy('id', 'desc')->get();
        $special_products = SpecialProduct::all();
        $promotions = WebsitePromotion::all();
        return view('frontend.index', compact('promotions','special_products','products','blogs','partners'));
    }

    // contact Us
    public function contactUs(){
        $branches = Branch::all();
        return view('frontend.contact-us', compact('branches'));
    }

    // blog Detail
    public function blogDetail($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.blog-detail', compact('blog'));
    }

    // blogs
    public function blogs(){
        $blogs = Blog::all();
        return view('frontend.blogs', compact('blogs'));
    }

    // faqs
    public function faqs(){
        $faqs = Faq::all();
        return view('frontend.faqs', compact('faqs'));
    }

    // custom Page
    public function customPage($slug){
        $page = CustomPage::where('slug', $slug)->first();
        return view('frontend.custom-page', compact('page'));
    }

    // images
    public function images(){
        $galleries = Gallery::all();
        return view('frontend.gallery', compact('galleries'));
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

    // subscribe Store
    public function subscribeStore (Request $request){
        $request->validate([
            'email'=> 'required|email'
        ]);
        if(Subscriber::where('email',$request->email)->exists()){
            return response()->json([
                'type' => 'success',
                'message' => 'Already Subscribed !',
            ]);
        }

        $subscribe = new Subscriber();
        $subscribe->email = $request->email;
        try {
            $subscribe->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Subscribed !.',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => 'Something going wrong. '.$exception.getMessage(),
            ]);
        }
    }
}
