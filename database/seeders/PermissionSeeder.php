<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'user_management',
            'order_management',
            'product_management',
            'support_management',
            'coupon_management',
        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'employee']);
        }

        $role = Role::where('name', 'admin')->where('guard_name', 'employee')->first();
        $permissions = Permission::all();
        $role->syncPermissions($permissions);
    }
}
