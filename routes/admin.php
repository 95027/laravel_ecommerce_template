<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/reset-password', [AdminAuthController::class, 'resetPassword'])->name('employee.reset-password');
    Route::post('/update-password', [AdminAuthController::class, 'updatePassword'])->name('employee.update-password');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware(['auth:employee'])->group(function () {

    Route::middleware('role:admin')->get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/admin/dashboard/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::prefix('user')->name('admin.')->group(function () {
        Route::get('/', [AdminUserController::class, 'allUsers'])->name('user');
    });


    Route::get('/orders', [OrderController::class, 'orderSearch'])->name('orders.search');

    Route::get('/profile', [AdminController::class, 'profilePage'])->name('profile-page');

    Route::get('/transations', [AdminPageController::class, 'transations'])->name('transations');

});
