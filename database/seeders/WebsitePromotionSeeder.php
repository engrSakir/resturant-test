<?php

namespace Database\Seeders;

use App\Models\WebsitePromotion;
use Illuminate\Database\Seeder;

class WebsitePromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsitePromotion::factory()->count(6)->create();
    }
}
