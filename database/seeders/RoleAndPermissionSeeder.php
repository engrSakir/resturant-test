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
        Role::create(['name' => 'super admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'employee']);

        $superAdmin= Role::find(1);
        $admin= Role::find(2);
        $employee= Role::find(3);

//        //admin_dashboard
//        $permission = Permission::create(['name' => 'admin_dashboard']);
//        $admin->givePermissionTo($permission);


    }
}
