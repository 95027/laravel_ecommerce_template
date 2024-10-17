<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Product\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $data['products'] = Product::with(['media'])->latest()->get();
        return view('client.pages.home',$data);
    }
}
