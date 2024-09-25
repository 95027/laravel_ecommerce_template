<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function allUsers()
    {
        $data['users'] = User::latest()->get();
        $data['pageTitle'] = 'All-Users';
        return view('admin.pages.users', $data);
    }
}
