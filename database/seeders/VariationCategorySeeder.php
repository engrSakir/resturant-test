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
        VariationCategory::factory()->count(6)->create();
    }
}
