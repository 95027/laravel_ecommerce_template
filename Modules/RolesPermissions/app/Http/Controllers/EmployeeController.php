<?php

namespace Modules\RolesPermissions\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{

    public function employees()
    {
        $data['employees'] = Employee::latest()->get();
        $data['roles'] = Role::where('name', '!=', 'admin')->latest()->get();
        return view('rolespermissions::employees', $data);
    }

    public function storeEmployee(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|email|unique:employees,email',
            'mobile' => 'required',
            'roleIds' => 'required|array',
            'roleIds.*' => 'exists:roles,id',
        ]);

        $employee = Employee::create([
            'employeeId' => 'EMP' . time(),
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
        ]);

        $employee->roles()->attach($request->roleIds);
        notify()->success('Employee created successfully with roles assigned.');

        return redirect()->back();
    }

    public function destroyEmployee(Request $request, $id) {}
}
