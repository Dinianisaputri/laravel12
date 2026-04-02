<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/fitur', [PageController::class, 'fitur']);
Route::get('/contact', [PageController::class, 'contact']);
