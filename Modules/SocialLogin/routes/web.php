<?php

use Illuminate\Support\Facades\Route;
use Modules\SocialLogin\Http\Controllers\SocialLoginController;

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

Route::prefix("/auth/google")->name('google.')->group(function () {
    Route::get("/redirect", [SocialLoginController::class,"googleRedirect"])->name("redirect");
    Route::get("/callback", [SocialLoginController::class,"googlecallback"])->name("callback");
});

