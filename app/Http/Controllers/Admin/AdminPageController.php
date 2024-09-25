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
        return view('admin.pages.products.add-product');
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
        return view('admin.pages.reviews');
    }

    // Contact Page
    public function contactForm()
    {
        return view('admin.pages.contactForm');
    }

    public function allOrders()
    {
        return view('admin.pages.orders');
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
        return view('admin.pages.roles');
    }


    public function orderDetails(){

        return view('admin.pages.order-details');
    }
}
