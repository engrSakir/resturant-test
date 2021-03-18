<?php

namespace Database\Seeders;

use App\Models\GlobalImages;
use Illuminate\Database\Seeder;

class GlobalImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=4 ; $i++) {
           $image = new GlobalImages();
           $image->image = "/uploads/images/global/".$i.'.png';
           $image->name = "global image ".$i;
           $image->save();
        }
    }
}
