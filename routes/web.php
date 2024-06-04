<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/desc', function () {
    return view('desc');
});

Route::get('/horror', function () {
    return view('horror');
});

Route::get('/indexLog', function () {
    return view('indexLog');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('login');
});