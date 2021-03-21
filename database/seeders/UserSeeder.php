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
            $user->name = 'Mr user '.$i;
            $user->phone = '0123456789'.$i;
            $user->email = 'user'.$i.'@gmail.com';
            $user->password = Hash::make('password');
            $user->save();
        }
    }
}
