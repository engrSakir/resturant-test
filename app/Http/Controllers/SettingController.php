<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class SettingController extends Controller
{
    //get General Static Form
    public function getGeneralStaticForm(){
        return view('backend.setting.general-static');
    }

    //seo Static Option Form
    public function seoStaticOptionForm(){
        return view('backend.setting.seo');
    }

    //website Banner Form
    public function websiteBannerForm(){
        return view('backend.setting.banner');
    }

    // social Link Static Form
    public function socialLinkStaticForm(){
        return view('backend.setting.social-link');
    }

    // special Product Static Form
    public function specialProductStaticForm(){
        return view('backend.setting.special-product');
    }

    // offer Static Form
    public function offerStaticForm(){
        return view('backend.setting.offer');
    }

    // update static option
    public function generalStaticUpdate(Request $request){
        $request->validate([
            'fav_icon' => 'nullable|image',
            'frontend_logo' => 'nullable|image',
            'backend_logo' => 'nullable|image',

            'company_email' => 'nullable|min:3',
            'company_phone' => 'nullable|min:3',
            'company_address' => 'nullable|min:3',

            'custom_head_code' => 'nullable|min:3',
            'custom_foot_code' => 'nullable|min:3',
            'footer_credit' => 'nullable|min:3',
        ]);
        try {

            update_static_option('company_email', $request->company_email);
            update_static_option('company_phone', $request->company_phone);
            update_static_option('company_address', $request->company_address);

            update_static_option('custom_head_code', $request->custom_head_code);
            update_static_option('custom_foot_code', $request->custom_foot_code);
            update_static_option('footer_credit', $request->footer_credit);



            if($request->hasFile('fav_icon')){
                if (get_static_option('fav_icon') != null)
                    File::delete(public_path(get_static_option('fav_icon'))); //Old image delete
                $image             = $request->file('fav_icon');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('fav_icon',$folder_path.$image_new_name);
            }

            if($request->hasFile('frontend_logo')){
                if (get_static_option('frontend_logo') != null)
                    File::delete(public_path(get_static_option('frontend_logo'))); //Old image delete
                $image             = $request->file('frontend_logo');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('frontend_logo',$folder_path.$image_new_name);
            }
            if($request->hasFile('backend_logo')){
                if (get_static_option('backend_logo') != null)
                    File::delete(public_path(get_static_option('backend_logo'))); //Old image delete
                $image             = $request->file('backend_logo');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('backend_logo',$folder_path.$image_new_name);
            }

            if($request->hasFile('loader_image')){
                if (get_static_option('loader_image') != null)
                    File::delete(public_path(get_static_option('loader_image'))); //Old image delete
                $image             = $request->file('loader_image');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('loader_image',$folder_path.$image_new_name);
            }

        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // social link Static Option Update
    public function sociallinkStaticOptionUpdate(Request $request){
        $request->validate([

            'company_facebook_link' => 'nullable|min:3',
            'company_twitter_link' => 'nullable|min:3',
            'company_youtube_link' => 'nullable|min:3',
            'company_instagram_link' => 'nullable|min:3',


        ]);
        try {

            update_static_option('company_facebook_link', $request->company_facebook_link);
            update_static_option('company_twitter_link', $request->company_facebook_link);
            update_static_option('company_youtube_link', $request->company_facebook_link);
            update_static_option('company_instagram_link', $request->company_facebook_link);

        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // special Product Static Option Update
    public function specialProductStaticOptionUpdate(Request $request){
        $request->validate([

            'special_product_highlight' => 'nullable|min:3',
            'special_product_title' => 'nullable|min:3',
            'product_highlight' => 'nullable|min:3',
            'product_title' => 'nullable|min:3',
            'special_product_image' => 'nullable|image',
        ]);
        try {

            update_static_option('product_highlight', $request->product_highlight);
            update_static_option('product_title', $request->product_title);
            update_static_option('special_product_highlight', $request->special_product_highlight);
            update_static_option('special_product_title', $request->special_product_title);

            if($request->hasFile('special_product_image')){
                if (get_static_option('special_product_image') != null)
                    File::delete(public_path(get_static_option('special_product_image'))); //Old image delete
                $image             = $request->file('special_product_image');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('special_product_image',$folder_path.$image_new_name);
            }

        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // offer Static Option Update
    public function offerStaticOptionUpdate(Request $request){
        $request->validate([

            'offer_highlight' => 'nullable|min:3',
            'offer_percentage' => 'nullable|min:3',
            'offer_description' => 'nullable|min:3',
            'offer_deadline' => 'nullable',
            'offer_image' => 'nullable|image',
        ]);
        try {

            update_static_option('offer_highlight', $request->offer_highlight);
            update_static_option('offer_percentage', $request->offer_percentage);
            update_static_option('offer_description', $request->offer_description);
            update_static_option('offer_deadline', $request->offer_deadline);

            if($request->hasFile('offer_image')){
                if (get_static_option('offer_image') != null)
                    File::delete(public_path(get_static_option('offer_image'))); //Old image delete
                $image             = $request->file('offer_image');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('offer_image',$folder_path.$image_new_name);
            }

        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // seo Static Option Update
    public function seoStaticOptionUpdate(Request $request){
        $request->validate([
            'meta_image' => 'nullable|image',

            'meta_description' => 'nullable|min:3',
            'meta_keywords' => 'nullable|min:3',
            'meta_author' => 'nullable|min:3',
        ]);
        try {

            update_static_option('meta_description', $request->meta_description);
            update_static_option('meta_keywords', $request->meta_keywords);
            update_static_option('meta_author', $request->meta_author);


            if($request->hasFile('meta_image')){
                if (get_static_option('meta_image') != null)
                    File::delete(public_path(get_static_option('meta_image'))); //Old image delete
                $image             = $request->file('meta_image');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('meta_image',$folder_path.$image_new_name);
            }
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // website Banner Update
    public function websiteBannerUpdate(Request $request){
        $request->validate([
            'banner_image' => 'nullable|image',

            'banner_title' => 'nullable|min:3',
            'banner_description' => 'nullable|min:3',
            'banner_highlight' => 'nullable|min:3',
        ]);
        try {

            update_static_option('banner_title', $request->banner_title);
            update_static_option('banner_description', $request->banner_description);
            update_static_option('banner_highlight', $request->banner_highlight);


            if($request->hasFile('banner_image')){
                if (get_static_option('banner_image') != null)
                    File::delete(public_path(get_static_option('banner_image'))); //Old image delete
                $image             = $request->file('banner_image');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('banner_image',$folder_path.$image_new_name);
            }
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }


}
