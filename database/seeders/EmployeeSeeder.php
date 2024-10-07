<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Employee::create([
            'employeeId' => 'ADMIN01',
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'mobile' => '9999999999',
            'password' => Hash::make('password'),
        ]);

        $role = Role::create([
            'name' => 'admin',
            'guard_name' => 'employee'
        ]);

        $permissions = [
            "employee management",
            "role management",
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

        $admin->assignRole($role->name);
        $admin->syncPermissions($permissions);
    }
}
