<?php

use Illuminate\Support\Facades\Route;
use Modules\ContactForm\Http\Controllers\ContactFormController;

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

Route::group(['middleware' => ['auth:employee', 'permission:contact management']], function () {
    Route::resource('contactform', ContactFormController::class)->names('contactform');
});
