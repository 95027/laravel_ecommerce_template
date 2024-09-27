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

    public function addProductPage()
    {
        $data['pageTitle'] = 'Add-Product';
        return view('admin.pages.products.add-product',$data);
    }

    public function editProduct($id){
        $data['product'] = Product::with('category','brand')->findOrFail($id);
        $data['brands'] = Brand::latest()->get();
        $data['categories'] = Category::whereNull('parentId')->latest()->get();
        $data['subcategories'] = Category::where('parentId', '!=', null)->latest()->get();
        return view('admin.pages.products.edit-product', $data);
    }

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


    public function employeePage()
    {
        $data['employees'] = Employee::latest()->get();
        $data['pageTitle'] = 'All-Employees';
        return view('admin.pages.employees', $data);
    }

    public function employeeDetails($id)
    {
        $employee = Employee::findOrFail($id);
        if ($employee) {
            return response()->json(['employee' => $employee]);
        }
    }


    public function rolePage()
    {
        $data['pageTitle'] = 'All-ROles';
        return view('admin.pages.roles',$data);
    }


    public function transations(){
        $data['pageTitle'] = 'All-Transactions';
        return view('admin.pages.transation', $data);
    }
}
