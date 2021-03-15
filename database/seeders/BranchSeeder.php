<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Branch::factory()->count(6)->create();

        for ($i = 1; $i <= 10; $i++) {
            $branch = new Branch();
            $branch->name = 'Branch '.$i;
            $branch->email = 'branch'.$i.'@gmail.com';
            $branch->phone = '0123456789'.$i;
            $branch->address = 'branch '.$i.' address';
            $branch->opening_time = time();
            $branch->serial = $i;
            $branch->save();
        }
    }
}
