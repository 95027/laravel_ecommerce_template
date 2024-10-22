<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Product\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        return view('client.pages.products');
    }

    public function productDetails($id)
    {
        $product = Product::with('media')->find($id);
        return view('client.pages.single-product-details', ['product' => $product]);
    }

}
