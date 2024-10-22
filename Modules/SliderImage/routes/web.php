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

Route::middleware(['auth:employee'])->group(function () {
    Route::get('/slider-image', [SliderImageController::class, 'getSliderImage'])->name('slider.index');
    Route::post('/slider-image', [SliderImageController::class, 'createSliderImage'])->name('slider.store');
    Route::delete('/slider-image/{id}', [SliderImageController::class, 'destroySliderImage'])->name('slider.destroy');
});
