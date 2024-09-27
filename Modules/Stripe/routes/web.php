<?php

use Illuminate\Support\Facades\Route;
use Modules\Stripe\Http\Controllers\StripeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('stripe')->name('stripe.')->group(function () {
    Route::post('/payment', [StripeController::class,'payment'])->name('payment');
    Route::get('/success', [StripeController::class,'success'])->name('success');
    Route::get('/cancel', [StripeController::class,'cancel'])->name('cancel');
    Route::post('/refund', [StripeController::class,'refund'])->name('refund');
});
