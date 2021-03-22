<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Employee']);
        Role::create(['name' => 'Waiter']);


        $superAdmin= Role::find(1);
        $admin= Role::find(2);
        $employee= Role::find(3);
        $waiter= Role::find(4);


//        //admin_dashboard
//        $permission = Permission::create(['name' => 'admin_dashboard']);
//        $admin->givePermissionTo($permission);


    }
}
