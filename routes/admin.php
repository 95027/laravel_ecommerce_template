<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware('guest')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/dashboard/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


    Route::prefix('brand')->name('brand')->group(function () {
        Route::get('/', [ProductController::class, 'getAllBrands']);
        Route::post('/', [ProductController::class, 'createBrand'])->name('.store');
        Route::put('/{id}', [ProductController::class, 'updateBrand'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteBrand'])->name('.delete');
    });

    Route::prefix('category')->name('category')->group(function () {
        Route::get('/', [ProductController::class, 'getAllCategories']);
        Route::post('/', [ProductController::class, 'createCategory'])->name('.store');
        Route::put('/{id}', [ProductController::class, 'updateCategory'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteCategory'])->name('.delete');
    });

    Route::prefix('product')->name('product')->group(function () {
        Route::get('/', [ProductController::class, 'getAllProducts']);
        Route::post('/', [ProductController::class, 'createProduct'])->name('.store');
        Route::put('/{id}', [ProductController::class, 'updateProduct'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteProduct'])->name('.delete');
    });

    Route::prefix('order')->name('order')->group(function () {
        Route::get('/', [ProductController::class, 'getAllOrders']);
        Route::get('/{id}', [ProductController::class, 'orderDetails'])->name('.details');
        Route::put('/{id}', [ProductController::class, 'updateOrder'])->name('.update');
    });
});
