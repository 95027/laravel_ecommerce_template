<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/dashboard/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::prefix('user')->name('admin.')->group(function () {
        Route::get('/', [AdminUserController::class, 'allUsers'])->name('user');
    });


    Route::prefix('brand')->name('brand')->group(function () {
        Route::get('/', [ProductController::class, 'getAllBrands']);
        Route::post('/', [ProductController::class, 'createBrand'])->name('.store');
        Route::get('/{id}', [ProductController::class, 'editBrand'])->name('.edit');
        Route::put('/{id}', [ProductController::class, 'updateBrand'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteBrand'])->name('.delete');
    });

    Route::prefix('category')->name('category')->group(function () {
        Route::get('/', [ProductController::class, 'getAllCategories']);
        Route::post('/', [ProductController::class, 'createCategory'])->name('.store');
        Route::get('/sub-category', [ProductController::class, 'getSubCategory'])->name('.sub-category');
        Route::post('/sub-category', [ProductController::class, 'createSubCategory'])->name('.sub-category-store');
        Route::get('/{id}', [ProductController::class, 'editCategory'])->name('.edit');
        Route::get('/sub-category/{id}', [ProductController::class, 'editSubCategory'])->name('.sub-category-edit');
        Route::put('/{id}', [ProductController::class, 'updateCategory'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteCategory'])->name('.delete');
        Route::put('/sub-category/{id}', [ProductController::class, 'updateSubCategory'])->name('.sub-category-update');
        Route::delete('/sub-category/{id}', [ProductController::class, 'deleteSubCategory'])->name('.sub-category-delete');
    });

    Route::prefix('product')->name('product')->group(function () {
        Route::get('/', [ProductController::class, 'getAllProducts']);
        Route::get('/addProductPage', [AdminPageController::class, 'addProductPage'])->name('.add-product-page');
        Route::post('/', [ProductController::class, 'createProduct'])->name('.store');
        Route::put('/{id}', [ProductController::class, 'updateProduct'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteProduct'])->name('.delete');
    });

    Route::prefix('order')->name('order')->group(function () {
        Route::get('/', [ProductController::class, 'getAllOrders']);
        Route::get('/{id}', [ProductController::class, 'orderDetails'])->name('.details');
        Route::put('/{id}', [ProductController::class, 'updateOrder'])->name('.update');
    });

    Route::get('/reviews', [AdminPageController::class, 'reviewsPage'])->name('reviewPage');
    Route::get('/contact-form', [AdminPageController::class, 'contactForm'])->name('contactForm');
    Route::get('/all-orders', [AdminPageController::class, 'allOrders'])->name('allOrders');
    Route::get('/coupons', [AdminPageController::class, 'couponPage'])->name('coupons');
    Route::get('/employees', [AdminPageController::class, 'employeePage'])->name('employees');
});
