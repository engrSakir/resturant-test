<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $product_category = new ProductCategory();
            $product_category->name = 'Product Category '.$i;
            $product_category->branch_id = 1;
            $product_category->status = 1;
            $product_category->save();
        }

        for ($i = 1; $i <= 9; $i++) {
            $user = new ProductCategory();
            $user->name = 'Product Category 1'.$i;
            $user->branch_id = 2;
            $user->status = 1;
            $user->save();
        }


        // ProductCategory::factory()->count(5)->create();
    }
}
