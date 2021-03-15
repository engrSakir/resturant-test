<?php

namespace Database\Seeders;

use App\Models\Variation;
use Illuminate\Database\Seeder;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Variation::factory()->count(6)->create();
        for ($i = 1; $i <= 10; $i++) {
            $variation = new Variation();
            $variation->name = 'Variation '.$i;
            $variation->category_id = 1;
            $variation->price = rand(10,100);
            $variation->save();
        }
    }
}
