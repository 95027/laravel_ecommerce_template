<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.admin-dashboard');
    }


    public function createEmployee(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'mobile' => 'required|string|max:15',
            'role' => 'required|string|max:255',
        ]);

        $employee = new Employee();

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->mobile = $request->input('mobile');
        $employee->role = $request->input('role');

        $employee->employeeId = 'SPK' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        $employee->save();

        notify()->success('Employee created successfully!');

        return redirect()->back();
    }

    public function updateEmployee(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'role' => 'required',
        ]);

        $employee = Employee::find($id);
        if ($employee) {
            $employee->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'role' => $request->role,
            ]);
            notify()->success('Employee updated successfully!');
            return redirect()->back();
        }
    }


    public function deleteEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            // dd($employee);
            $employee->delete();
            notify()->success('Employee deleted successfully');
            return redirect()->back();
        }
        notify()->error('Employee not found');
        return redirect()->back();
    }



}
