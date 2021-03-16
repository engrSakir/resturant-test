<?php

namespace Database\Seeders;

use App\Models\WebsitePromotion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BranchSeeder::class);
        $this->call(StaticOptionSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VariationSeeder::class);
        $this->call(VariationCategorySeeder::class);
        $this->call(WebsitePromotionSeeder::class);
        $this->call(SpecialProductSeeder::class);
        $this->call(GlobalImagesSeeder::class);
        $this->call(GlobalImagesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(GallerySeeder::class);
    }
}
