<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LaporanJalanController;

// Public Pages
Route::resource('laporan-jalan', LaporanJalanController::class);
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/fitur', [PageController::class, 'fitur']);
Route::get('/contact', [PageController::class, 'contact']);

// 🔥 FIX: Tambahin route login default (biar auth nggak error)
Route::get('/login', [AdminController::class, 'login'])->name('login');

// Admin Auth
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'doLogin']);
    Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth');
});

// Admin Protected Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('laporan', LaporanController::class);
    Route::resource('users', UserController::class);
});