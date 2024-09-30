<?php

use Illuminate\Support\Facades\Route;
use Modules\Paypal\Http\Controllers\PaypalController;

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

Route::middleware([])->prefix('paypal')->name('paypal.')->group(function (){

    Route::post('/payment', [PaypalController::class,'payment'])->name('payment');
    Route::get('/success', [PaypalController::class,'success'])->name('success');
    Route::get('/cancel', [PaypalController::class,'cancel'])->name('cancel');
    Route::post('/refund', [PaypalController::class,'refund'])->name('refund');

});
