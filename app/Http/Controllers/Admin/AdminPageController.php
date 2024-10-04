<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{

    // Review Page
    public function reviewsPage()
    {
        $data['pageTitle'] = 'All-Reviews';
        return view('admin.pages.reviews');
    }

    // Contact Page
    public function contactForm()
    {
        $data['pageTitle'] = 'Contact Page';
        return view('admin.pages.contactForm', $data);
    }


    public function transations(){
        $data['pageTitle'] = 'All-Transactions';
        return view('admin.pages.transation', $data);
    }
}
