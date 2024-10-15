<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('auth')->name('profile.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
    Route::post('/profile/verify-email', [ProfileController::class, 'verifyEmail'])->name('mail.verify');
    Route::get('/profile/verify-email/{user}', [ProfileController::class, 'mailVerified'])->name('mail.verified');
});



//Route::get('/export', [ExportController::class, 'export'])->name('export');


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/vendor.php';
require __DIR__ . '/employee.php';
