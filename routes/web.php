<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/welcome', [WelcomeController::class, 'index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/list', [WelcomeController::class, 'index']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
