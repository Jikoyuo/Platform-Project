<?php

use App\Http\Controllers\DBCategoryController;
use App\Http\Controllers\DBProductController;
use App\Http\Controllers\DBUsersController;
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

// Route::get('/login', function () {
//     return view('login');
// });

<<<<<<< HEAD
Route::get('/login', [DBUsersController::class, 'index']);
=======
// Tambahkan nama rute register
Route::get('/register', function () {
    return view('register');
});

>>>>>>> fc7fc7761481cfde0b072501237975a52b173cfe

Route::get('/genres', [DBCategoryController::class, 'index']);

Route::get('/genres/{slug}', [DBProductController::class, 'show']);

Route::get('/search', [DBProductController::class, 'index']);



