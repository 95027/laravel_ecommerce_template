<?php

namespace Modules\RolesPermissions\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{

    public function employees()
    {
        $data['employees'] = Employee::where('name', '!=', 'admin')->latest()->get();
        $data['roles'] = Role::where('name', '!=', 'admin')->latest()->get();
        return view('rolespermissions::employees', $data);
    }

    public function storeEmployee(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|email|unique:employees,email',
            'mobile' => 'required',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
        ]);

        $employee = Employee::create([
            'employeeId' => 'EMP' . time(),
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make('password'),
        ]);

        $employee->syncRoles($request->roles);
        $permissions = $employee->getPermissionsViaRoles();
        $employee->syncPermissions($permissions);

        notify()->success('Employee created successfully with roles assigned.');

        return redirect()->back();
    }

    public function destroyEmployee(Request $request, $id) {
        $employee = Employee::find($id);

        if($employee){
            $employee->delete();
        }

        notify()->success('Employee deleted successfully...');
        return redirect()->back();
    }
}
