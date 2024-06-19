<?php

use App\Models\DBCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBCartController;
use App\Http\Controllers\DBAdminController;
use App\Http\Controllers\DBUsersController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\DBProductController;
use App\Http\Controllers\DBCategoryController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleAuthController;

Route::get('/', [RedirectController::class, 'redirectToHome']);

Route::get('/home', [DBProductController::class, 'index']);

Route::get('/product/{slug}', [DBProductController::class, 'productDesc']);
Route::post('/product/add', [DBCartController::class, 'store']);

Route::get('/admin', [DBAdminController::class, 'show']);
Route::post('/admin/add', [DBAdminController::class, 'store']);
Route::post('/admin/edit', [DBAdminController::class, 'edit']);
Route::post('/admin/delete', [DBAdminController::class, 'delete']);
Route::post('/admin/add-product', [DBAdminController::class, 'addProduct']);

Route::get('/login', [DBUsersController::class, 'index']);
Route::post('/login', [DBUsersController::class, 'login']);
Route::post('/register', [DBUsersController::class, 'store']);
Route::get('/logout', [DBUsersController::class, 'logout']);

Route::get('/genres', [DBCategoryController::class, 'index']);

Route::get('/genres/{slug}', [DBProductController::class, 'show']);

Route::get('/search', [DBProductController::class, 'index']);

Route::get('/cart', [DBCartController::class, 'index']);

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('/auth/facebook', [FacebookController::class, 'facebookpage'])->name('facebook-auth');
Route::get('/auth/facebook/callback', [FacebookController::class, 'facebookredirect']);
