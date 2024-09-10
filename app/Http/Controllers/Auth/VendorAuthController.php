<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorAuthController extends Controller
{
    public function vendorLogin()
    {
        return view('vendor.auth.vendor-login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::guard('vendor')->attempt($credentials, $request->remember)) {
            return redirect()->route('vendor.dashboard');
        };

        return back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('vendor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('vendor.login.form');
    }
}
