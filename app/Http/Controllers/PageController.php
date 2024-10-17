<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function contactUs(){
        return view('client.pages.contact-us');
    }

    public function myAccount(){
        return view('client.pages.my-account');
    }

    public function privacyPolicy(){
        return view('client.pages.privacy-policy');
    }

    public function termsConditions(){
        return view('client.pages.terms-conditions');
    }
}
