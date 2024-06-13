<?php

use App\Http\Controllers\DBCartController;
use App\Http\Controllers\DBCategoryController;
use App\Http\Controllers\DBProductController;
use App\Http\Controllers\DBUsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Models\DBCategory;
use App\Http\Controllers\IMDbController;
use App\Models\DBCart;

Route::get('/fetch-imdb-data', [IMDbController::class, 'fetchData']);

Route::get('/', [RedirectController::class, 'redirectToHome']);

Route::get('/home', [DBProductController::class, 'index']);

Route::get('/product/{slug}', [DBProductController::class, 'productDesc']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', [DBUsersController::class, 'index']);
Route::post('/login', [DBUsersController::class, 'login']);
Route::post('/register', [DBUsersController::class, 'store']);
Route::get('/logout', [DBUsersController::class, 'logout']);

Route::get('/genres', [DBCategoryController::class, 'index']);

Route::get('/genres/{slug}', [DBProductController::class, 'show']);

Route::get('/search', [DBProductController::class, 'index']);

Route::get('/cart', [DBCartController::class, 'index']);

