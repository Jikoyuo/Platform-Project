<?php

use App\Http\Controllers\DBCategoryController;
use App\Http\Controllers\DBProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
