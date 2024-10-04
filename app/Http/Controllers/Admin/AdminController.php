<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        $data['admins'] = Admin::first();
        return view('admin.pages.profile-page', $data);
    }


}
