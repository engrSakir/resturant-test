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
        set_static_option('breadcrumb_image', null);
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
        set_static_option('banner_link', 'https://www.youtube.com');
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

        set_static_option('offer_highlight','Special Offers' );
        set_static_option('offer_percentage','Get 50% off' );
        set_static_option('offer_description','YOUR ORDER OF $500 OR MORE' );
        set_static_option('offer_deadline',null );
        set_static_option('offer_image', null );

        set_static_option('blog_highlight', 'From our press' );
        set_static_option('blog_title', 'latest News & Blogs' );

        set_static_option('gallery_title', 'Gallery title...' );
        set_static_option('gallery_highlight', 'Gallery highlight...' );

        set_static_option('product_checkout_description', 'Product checkout description...');
        set_static_option('map_link', null);
        set_static_option('subscribe_title', 'Get Newsletter..' );
        set_static_option('subscribe_description', 'lorem ipsum subscribe description ....' );

        set_static_option('faq_highlight', 'Faq highlight...' );
        set_static_option('faq_title', 'Faq title...' );

        set_static_option('fb_auto_extend', true);
        set_static_option('fb_page_id', '1234567890');
        set_static_option('fb_theme_color', '#7646ff');

    }
}
