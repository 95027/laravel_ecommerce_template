<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeAuthController extends Controller
{
    public function employeeLoginForm()
    {
        return view('employee.auth.employee-login');
    }

    public function employeeLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('employee')->attempt($credentials)) {

            
            $employee = Auth::guard('employee')->user();
            //dd($employee);

            if ($employee->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }
        }



        return redirect()->route('admin.dashboard');
    }
}
