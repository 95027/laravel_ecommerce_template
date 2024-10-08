<?php

use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Auth\EmployeeAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->name('employee.')->group(function () {

    Route::get('/employee/login', [EmployeeAuthController::class, 'employeeLoginForm'])->name('login.form');
    Route::post('/employee/login', [EmployeeAuthController::class, 'employeeLogin'])->name('login');
});

Route::middleware(['auth:employee'])->prefix('employee')->name('employee.')->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [EmployeeAuthController::class, 'logout'])->name('logout');
});
