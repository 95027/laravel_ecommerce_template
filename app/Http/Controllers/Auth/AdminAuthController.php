<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\employee\PasswordResetMail;
use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AdminAuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.admin-login');
    }

    public function resetPasswordForm(){
        return view('admin.auth.employee-reset-password');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('employee')->attempt($credentials)) {

            $employee = Auth::guard('employee')->user();

            if(!$employee->hasRole('admin')) {
                return redirect()->route('employee.dashboard');
            }
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login.form');
    }

    public function resetPassword(Request $request){

        $employeeId = $request->employeeId;

        $employee = Employee::find($employeeId);

        if(!$employee){
            notify()->error('Requested employee not found');
        }

        $token = Password::broker('employees')->createToken($employee);

        Mail::to($employee->email)->send(new PasswordResetMail($token, $employee->email));

        notify()->success('Credentials are mailed to ' . $employee->name);
        return redirect()->back();

    }

    public function updatePassword(Request $request){

        $request->validate([
            'token' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $status = Password::broker('employee')->reset($request->only('email', 'password', 'password_confirmation', 'token'), function($employee, $password){

            $employee->forceFill([
                'password' => Hash::make($password),
                'remember_token' => Str::random(60),
            ])->save();

            event(new PasswordReset($employee));

        });

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('admin.login')->with('success', 'Your password resetted successfully...');
        } else {
            return redirect()->back()->with('error', 'Invalid or expired token');
        }

    }
}
