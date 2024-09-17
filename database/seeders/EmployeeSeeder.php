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
        $employee = Employee::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        $role = Role::create(['name' => 'admin', 'guard_name' => 'employee']);
        $role->givePermissionTo(Permission::all());
        $employee->assignRole('admin');
    }
}
