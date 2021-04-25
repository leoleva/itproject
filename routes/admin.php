<?php

use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    // Admin Dashboard
    Route::get('dashboard', [AdminController::class, ''], 'AdminController@dashboard')->name('adminDashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('/welcome', [WelcomeController::class, 'index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/list', [WelcomeController::class, 'index']);
});
