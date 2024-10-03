<?php

use Illuminate\Support\Facades\Route;
use Modules\RolesPermissions\Http\Controllers\EmployeeController;
use Modules\RolesPermissions\Http\Controllers\RolesPermissionsController;

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


Route::middleware(['auth:admin'])->prefix('employee')->name('employee.')->group(function (){

    Route::get('/', [EmployeeController::class,'employees'])->name('index');
    Route::get('/role', [RolesPermissionsController::class, 'roles'])->name('role.index');
    Route::post('/', [EmployeeController::class,'storeEmployee'])->name('store');
    Route::post('/role', [RolesPermissionsController::class, 'createRole'])->name('role.create');
    Route::delete('/{id}', [EmployeeController::class,'destroyEmployee'])->name('destroy');
    Route::delete('/role/{id}', [RolesPermissionsController::class, 'destroyRole'])->name('role.destroy');

});
