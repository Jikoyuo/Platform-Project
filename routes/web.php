<?php

use App\Http\Controllers\DBProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;

Route::get('/', [RedirectController::class, 'redirectToHome']);

Route::get('/home', [DBProductController::class, 'index']);

Route::get('/desc', function () {
    return view('desc');
});

Route::get('/indexLog', function () {
    return view('indexLog');
});

Route::get('/admin', function () {
    return view('admin');
});

// Route::get('/login', [LoginController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
