<?php

use Illuminate\Support\Facades\Route;
use Modules\Razorpay\Http\Controllers\RazorpayController;

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


Route::middleware(['auth:admin'])->prefix('razorpay')->name('razorpay.')->group(function () {

    Route::get('/test', [RazorpayController::class, 'test'])->name('test');
    Route::post('/payment', [RazorpayController::class, 'payment'])->name('payment');
    Route::post('/success', [RazorpayController::class, 'success'])->name('success');
    Route::post('/refund', [RazorpayController::class, 'refund'])->name('refund');
});
