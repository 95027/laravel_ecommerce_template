<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->name('profile.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
    Route::post('/profile/verify-email', [ProfileController::class, 'verifyEmail'])->name('mail.verify');
    Route::get('/profile/verify-email/{user}', [ProfileController::class, 'mailVerified'])->name('mail.verified');
});
// Routes that require authentication
Route::middleware([])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
});

// All Pages
Route::prefix('web')->name('web.')->group(function () {
    Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
    Route::get('/cart', [PageController::class, 'cartPage'])->name('cart-page');
    Route::get('/checkout', [PageController::class, 'checkoutPage'])->name('checkout-page');
    Route::get('/not-found',[PageController::class, 'notFoundPage'])->name('notFoundPage');
    Route::get('/contact-us',[PageController::class, 'contactUs'])->name('contact-us');
    Route::get('my-account',[PageController::class, 'myAccount'])->name('my-account');

    // Products
    Route::get('/all-products',[ProductController::class, 'products'])->name('products');
    Route::get('/product-deatils',[ProductController::class,'productDetails'])->name('product-deatils');
    

    // Privacy Policy
    Route::get('/privacy-policy',[PageController::class,'privacyPolicy'])->name('privacy-policy');

    // Terms & Conditions
    Route::get('/terms-conditions',[PageController::class,'termsConditions'])->name('terms-conditions');
});






//Route::get('/export', [ExportController::class, 'export'])->name('export');


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/vendor.php';
require __DIR__ . '/employee.php';
