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

        set_static_option('company_email', 'company@gmail.com');
        set_static_option('company_phone', '01234567890');
        set_static_option('company_address', 'company---adddress');
        set_static_option('company_facebook_link', 'facebook.com');



        set_static_option('custom_head_code', null);
        set_static_option('custom_foot_code', null);

        set_static_option('footer_credit', 'lorem ipsum');
        set_static_option('website_meta_description', null);


    }
}
