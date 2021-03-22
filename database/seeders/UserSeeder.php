<?php

namespace Database\Seeders;

use App\Models\User;
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
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->name = 'Mr Super Admin '.$i;
            $user->phone = '0123456789'.$i;
            $user->email = 'superadmin'.$i.'@gmail.com';
            $user->password = Hash::make('password');
            $user->save();

            $user->assignRole('Super Admin');
        }

        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->name = 'Mr Admin '.$i;
            $user->phone = '0123456790'.$i;
            $user->email = 'admin'.$i.'@gmail.com';
            $user->password = Hash::make('password');
            $user->save();

            $user->assignRole('Admin');
        }

        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->name = 'Mr Employee '.$i;
            $user->phone = '0123456791'.$i;
            $user->email = 'employee'.$i.'@gmail.com';
            $user->password = Hash::make('password');
            $user->save();

            $user->assignRole('Employee');
        }
    }
}
