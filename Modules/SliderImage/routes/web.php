<?php

use Illuminate\Support\Facades\Route;
use Modules\SliderImage\Http\Controllers\SliderImageController;

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

Route::middleware(['auth:employee'])->prefix('slider-image')->name('sliderImage.')->group(function () {
    Route::get('/',[ SliderImageController::class, 'getSliderImage'])->name('index');
    Route::post('/',[ SliderImageController::class, 'createSliderImage'])->name('store');
    Route::delete('/{id}',[ SliderImageController::class, 'destroySliderImage'])->name('destroy');
});
