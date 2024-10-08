<?php

use Illuminate\Support\Facades\Route;
use Modules\Report\Http\Controllers\ReportController;

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

Route::middleware(['auth:employee', 'permission:report management'])->prefix('report')->name('report.')->group(function(){

    Route::get('/transaction', [ReportController::class, 'transactionReport'])->name('transaction');
    Route::get('/sales', [ReportController::class, 'saleReport'])->name('sales');
    Route::get('/product', [ReportController::class, 'productReport'])->name('product');
    Route::get('/brand', [ReportController::class, 'brandReport'])->name('brand');
});
