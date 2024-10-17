<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        return view('client.pages.products');
    }

    public function productDetails()
    {
        return view('client.pages.single-product-details');
    }

}
