<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/dashboard/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
