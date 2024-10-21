<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Category\Models\Category;
use Modules\Product\Models\Product;


class HomeController extends Controller
{
    public function home()
    {
        return view('client.pages.home');
    }
}
