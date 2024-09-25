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
        $data['pageTitle'] = 'Dashboard';
        return view('admin.pages.admin-dashboard', $data);
    }

    public function profilePage()
    {
        $data['pageTitle'] = 'My-Profile';
        return view('admin.pages.profile-page');
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

        session()->flash('status', 'success');
        session()->flash('message', 'Employee created successfully!');
        // notify()->success('Employee created successfully!');

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
            session()->flash('status', 'success');
            session()->flash('message', 'Employee updated successfully!');
            // notify()->success('Employee updated successfully!');
            return redirect()->back();
        }
    }


    public function deleteEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            // dd($employee);
            $employee->delete();
            session()->flash('status', 'success');
            session()->flash('message', 'Employee deleted successfully');
            // notify()->success('Employee deleted successfully');
            return redirect()->back();
        }
        session()->flash('status', 'error');
        session()->flash('message', 'Employee not found');
        // notify()->error('Employee not found');
        return redirect()->back();
    }



}
