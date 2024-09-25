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

    Route::prefix('category')->name('category')->group(function () {
        Route::post('/', [ProductController::class, 'createCategory'])->name('.store');
        Route::get('/sub-category', [ProductController::class, 'getSubCategory'])->name('.sub-category');
        Route::post('/sub-category', [ProductController::class, 'createSubCategory'])->name('.sub-category-store');
        Route::get('/{id}', [ProductController::class, 'editCategory'])->name('.edit');
        Route::get('/sub-category/{id}', [ProductController::class, 'editSubCategory'])->name('.subCategoryEdit');
        Route::put('/{id}', [ProductController::class, 'updateCategory'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteCategory'])->name('.delete');
        Route::get('/sub-category/{id}', [ProductController::class, 'editSubCategory'])->name('.editSubCategory');
        Route::put('/sub-category/{id}', [ProductController::class, 'updateSubCategory'])->name('.subCategoryUpdate');
        Route::delete('/sub-category/{id}', [ProductController::class, 'deleteSubCategory'])->name('.sub-category-delete');
    });

    Route::prefix('product')->name('product')->group(function () {
        //Route::get('/', [ProductController::class, 'getAllProducts']);
        Route::get('/addProductPage', [AdminPageController::class, 'addProductPage'])->name('.add-product-page');
        Route::get('/edit-product/{id}', [AdminPageController::class, 'editProduct'])->name('.editProduct');
        Route::post('/', [ProductController::class, 'createProduct'])->name('.store');
        Route::put('/{id}', [ProductController::class, 'updateProduct'])->name('.update');
        Route::delete('/{id}', [ProductController::class, 'deleteProduct'])->name('.delete');
    });

    Route::prefix('order')->name('order')->group(function () {
        Route::get('/', [ProductController::class, 'getAllOrders']);
        Route::get('/{id}', [ProductController::class, 'orderDetails'])->name('.details');
        Route::put('/{id}', [ProductController::class, 'updateOrder'])->name('.update');
    });

    Route::prefix('employee')->name('employee')->group(function () {
        Route::get('/employees', [AdminPageController::class, 'employeePage'])->name('.employees');
        Route::post('/', [AdminController::class, 'createEmployee'])->name('.store');
        Route::get('/employee-deatils/{id}', [AdminPageController::class, 'employeeDetails'])->name('.details');
        Route::put('/{id}', [AdminController::class, 'updateEmployee'])->name('.update');
        Route::delete('/{id}', [AdminController::class, 'deleteEmployee'])->name('.delete');
    });

    Route::get('/all-orders', [AdminPageController::class, 'allOrders'])->name('allOrders');

    Route::get('/', [AdminPageController::class, 'rolePage'])->name('rolePage');

    Route::get('/orders', [OrderController::class, 'orderSearch'])->name('orders.search');

    Route::get('/profile', [AdminController::class, 'profilePage'])->name('profile-page');


    Route::get('order-details', [AdminPageController::class, 'orderDetails'])->name('order-details');

});
