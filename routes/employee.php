<?php

use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Auth\EmployeeAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->name('employee.')->group(function () {

    Route::get('/employee/login', [EmployeeAuthController::class, 'employeeLoginForm'])->name('login.form');
    Route::post('/employee/login', [EmployeeAuthController::class, 'employeeLogin'])->name('login');
});

Route::middleware(['auth'])->name('employee.')->group(function () {});
