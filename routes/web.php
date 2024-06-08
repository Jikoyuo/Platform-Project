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

// Tambahkan nama rute login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Tambahkan nama rute register
Route::get('/register', function () {
    return view('register');
})->name('register');
