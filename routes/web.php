<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pemesanan', function () {
    return view('layout-admin').view('pemesanan');
});

