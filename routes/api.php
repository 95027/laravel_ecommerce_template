<?php

use App\Http\Controllers\Api\SanctumAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->prefix('/auth')->group(function(){

    Route::post('/register', [SanctumAuthController::class, 'register']);
    Route::post('/login', [SanctumAuthController::class, 'login']);

});

Route::middleware('auth:sanctum')->prefix('/auth')->group(function (){

    Route::get('/user', [SanctumAuthController::class, 'getUserByToken']);

});

Route::middleware('auth:sanctum')->group(function(){

    // auth routes

});

