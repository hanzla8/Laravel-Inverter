<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

// Admin Work
Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/forget-password', [AdminAuthController::class, 'PasswordRequest'])->name('admin.password.request');



 //is main ham koch prameter middleweare wagera add krenge.
Route::group([
    'middleware' => ['auth', 'user.type:admin'],
    'prefix' => 'admin', 
    'as'    => 'admin.'
], function(){ 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index'); //admin.dashboard.index
    // Route::get('/appointment', [DashboardController::class, 'appointment'])->name('dashboard.appointment'); 
});









?>