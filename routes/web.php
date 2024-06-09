<?php

use App\Http\Controllers\DBCategoryController;
use App\Http\Controllers\DBProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Models\DBCategory;

Route::get('/', [RedirectController::class, 'redirectToHome']);

Route::get('/home', [DBProductController::class, 'index']);

Route::get('/desc', function () {
    return view('desc');
});

Route::get('/admin', function () {
    return view('admin');
});

// Tambahkan nama rute login
Route::get('/login', function () {
    return view('login');
});

// Tambahkan nama rute register
Route::get('/register', function () {
    return view('register');
});

Route::get('/genres', [DBCategoryController::class, 'index']);

Route::get('/genres/{genre:slug}', [DBCategoryController::class, 'index']);

Route::get('/search', [DBProductController::class, 'index']);