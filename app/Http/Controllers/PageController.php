<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function clientLogin(){
        return view('client.Auth.client-login');
    }
}
