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

    // social Link Static Form
    public function socialLinkStaticForm(){
        return view('backend.setting.social-link');
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


}
