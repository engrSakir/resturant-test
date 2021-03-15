<?php

namespace Database\Seeders;

use App\Models\VariationCategory;
use Illuminate\Database\Seeder;

class VariationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // VariationCategory::factory()->count(6)->create();
        for ($i = 1; $i <= 10; $i++) {
            $variation_category = new VariationCategory();
            $variation_category->name = 'Variation Category '.$i;
            $variation_category->product_id = 1;
            $variation_category->save();
        }
    }
}
