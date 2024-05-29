<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/desc', function () {
    return view('desc');
});

Route::get('/horror', function () {
    return view('horror');
});