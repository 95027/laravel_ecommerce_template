<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/admin/dashboard/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::prefix('user')->name('admin.')->group(function () {
        Route::get('/', [AdminUserController::class, 'allUsers'])->name('user');
    });

    Route::prefix('employee')->name('employee')->group(function () {
        Route::get('/employees', [AdminPageController::class, 'employeePage'])->name('.employees');
        Route::post('/', [AdminController::class, 'createEmployee'])->name('.store');
        Route::get('/employee-deatils/{id}', [AdminPageController::class, 'employeeDetails'])->name('.details');
        Route::put('/{id}', [AdminController::class, 'updateEmployee'])->name('.update');
        Route::delete('/{id}', [AdminController::class, 'deleteEmployee'])->name('.delete');
    });


    Route::get('/role', [AdminPageController::class, 'rolePage'])->name('rolePage');

    Route::get('/orders', [OrderController::class, 'orderSearch'])->name('orders.search');

    Route::get('/profile', [AdminController::class, 'profilePage'])->name('profile-page');



    Route::get('/transations', [AdminPageController::class, 'transations'])->name('transations');

});
