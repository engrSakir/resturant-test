<?php

namespace Database\Seeders;

use App\Models\SpecialProduct;
use Illuminate\Database\Seeder;

class SpecialProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       SpecialProduct::factory()->count(6)->create();
    }
}
