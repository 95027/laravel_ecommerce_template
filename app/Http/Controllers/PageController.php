<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Modules\Address\Models\Address;
use Modules\Order\Models\Order;

class PageController extends Controller
{
    public function clientLogin()
    {
        return view('client.Auth.client-login');
    }

    public function aboutUs()
    {
        return view('client.pages.about');
    }

    public function cartPage()
    {
        return view('client.pages.cart');
    }

    public function checkoutPage()
    {
        return view('client.pages.checkout');
    }

    public function notFoundPage()
    {
        return view('client.pages.404-not-found-page');
    }

    public function contactUs()
    {
        return view('client.pages.contact-us');
    }

    public function myAccount(Request $request)
    {
        $data = $request->all();
        $userId = auth()->user()->id;
        $data['user'] = auth()->user(); // Get the authenticated user
        $data['addresses'] = Address::where('userId', $userId)->latest()->get();
        $data['orders'] = Order::where('userId', $userId)->latest()->get();
        return view('client.pages.my-account', $data);
    }

    public function privacyPolicy()
    {
        return view('client.pages.privacy-policy');
    }

    public function termsConditions()
    {
        return view('client.pages.terms-conditions');
    }
}
