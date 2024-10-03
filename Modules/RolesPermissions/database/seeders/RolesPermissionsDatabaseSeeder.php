<?php

namespace Modules\RolesPermissions\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $this->call([]);

        $role = Role::create([
            'name' => 'admin',
            'guard_name' => 'employee'
        ]);

        $permissions = [
            "employee management",
            "user management",
            "product management",
            "order management",
            "coupon management",
            "support management",
            "transaction management",
            "contact management",
            "reviews management",
            "report management"
        ];


        foreach ($permissions as $permission) {
            $permission = Permission::create([
                'name' => $permission,
                'guard_name' => 'employee',
            ]);

            $role->givePermissionTo($permission->name);
        }

    }
}
