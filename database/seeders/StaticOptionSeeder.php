<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        set_static_option('no_image', 'uploads/images/setting/no-image.png');

        set_static_option('fav_icon', null);
        set_static_option('frontend_logo', null);
        set_static_option('backend_logo', null);
        set_static_option('website_meta_image', null);
        set_static_option('banner_image', null);
        set_static_option('company_email', 'company@gmail.com');
        set_static_option('company_phone', '01234567890');
        set_static_option('company_address', 'company---adddress');
        set_static_option('company_facebook_link', 'https://www.facebook.com/');
        set_static_option('company_twitter_link', 'https://twitter.com/');
        set_static_option('company_youtube_link', 'https://www.youtube.com/');
        set_static_option('company_instagram_link', 'https://www.instagram.com/');
        set_static_option('custom_head_code', null);
        set_static_option('custom_foot_code', null);

        set_static_option('footer_credit', 'lorem ipsum Footer credit ....');

        set_static_option('banner_highlight', 'Welcome To ...');
        set_static_option('banner_description','Lorem ipsum dolor sit amet' );
        set_static_option('banner_title', 'Fresh  Food');

        set_static_option('meta_description', null);
        set_static_option('meta_keywords', null);
        set_static_option('meta_author', null);
        set_static_option('meta_image', null);

        set_static_option('product_highlight', 'Discover our');
        set_static_option('product_title', 'Popular farmfoom');
        set_static_option('special_product_highlight', 'Hot deal of the day');
        set_static_option('special_product_title','We are o.........' );
        set_static_option('special_product_image', null );


    }
}
