<?php

use App\Http\Controllers\Auth\VendorAuthController;
use App\Http\Controllers\Vendor\VendorController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/vendor/login', [VendorAuthController::class, 'vendorLogin'])->name('vendor.login.form');
    Route::post('/vendor/login', [VendorAuthController::class, 'login'])->name('vendor.login');
});


Route::middleware('auth:vendor')->group(function () {

    Route::get('/vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    Route::post('/vendor/dashboard/logout', [VendorAuthController::class, 'logout'])->name('vendor.logout');

});
