<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function dashboard(){
        return view('employee.pages.dashboard');
    }

    public function users(){
        return view('employee.pages.users');
    }

    public function orders(){
        return view('employee.pages.orders');
    }
    
}
