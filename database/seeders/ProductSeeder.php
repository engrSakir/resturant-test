<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory()->count(10)->create();
        for ($i = 1; $i <= 10; $i++) {
            $product = new Product();
            $product->name = 'Product '.$i;
            $product->category_id = 1;
            $product->price = rand(10,100);
            $product->save();
        }

        for ($i = 1; $i <= 9; $i++) {
            $product = new Product();
            $product->name = 'Product 1'.$i;
            $product->category_id = 1;
            $product->price = rand(10,100);
            $product->save();
        }

        for ($i = 1; $i <= 9; $i++) {
            $product = new Product();
            $product->name = 'Product 1'.$i;
            $product->category_id = 3;
            $product->price = rand(10,100);
            $product->save();
        }
    }
}
