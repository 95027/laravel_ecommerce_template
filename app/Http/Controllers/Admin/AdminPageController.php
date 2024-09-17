<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function addProductPage()
    {
        $data['categories'] = Category::where('parentId', null)->latest()->get();
        $data['subcategories'] = Category::where('parentId', '!=', null)->latest()->get();
        $data['brands'] = Brand::latest()->get();
        return view('admin.pages.products.add-product', $data);
    }

    // Review Page
    public function reviewsPage(){
        return view('admin.pages.reviews');
    }

    // Contact Page
    public function contactForm(){
        return view('admin.pages.contactForm');
    }

    public function allOrders(){
        return view('admin.pages.orders');
    }
}
