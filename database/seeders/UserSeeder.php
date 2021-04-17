<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Mr Super Admin';
        $user->email = 'superadmin@gmail.com';
        $user->phone = '01304734623';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('Super Admin');

        $user = new User();
        $user->name = 'Mr Admin ';
        $user->phone = '01304734624';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('Admin');

        $user = new User();
        $user->name = 'Mr Staff ';
        $user->phone = '01304734625';
        $user->email = 'staff@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('Employee');
    }
}
