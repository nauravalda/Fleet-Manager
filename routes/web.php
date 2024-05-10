<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\Kendaraan;
use App\Models\User;
use App\Models\Driver;
use App\Models\Pemesanan;


Route::get('/', function () {

    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::post('/login', 'App\Http\Controllers\AuthController@actionlogin');

Route::get('/logout', 'App\Http\Controllers\AuthController@logout');



Route::get('/login', function () {
    return view('login');
});




Route::get('/pemesanan', function () {
    $data = new Kendaraan();
    $kendaraan = $data->getDataKendaraan();
    $user = new User();
    $top = $user->getDataTopLevel();
    $mid = $user->getDataMidLevel();
    $driver = new Driver();
    $driver = $driver->getDataDriver();
    return view('layout-admin').view('pemesanan', ['kendaraan' => $kendaraan, 'top' => $top, 'mid' => $mid, 'driver' => $driver]);
});

    

Route::get('/home', function () {
    $pemesanan = new Pemesanan();
    $kendaraan = new Kendaraan();
    $user = new User();
    $user = new User();
    $data = $pemesanan->getDataPemesananByAdmin(1);
    $kendaraan = $kendaraan->getDataKendaraan();
    $top = $user->getDataTopLevel();
    $mid = $user->getDataMidLevel();
    $driver = new Driver();
    $driver = $driver->getDataDriver();

    return view('layout-admin').view('home', ['data' => $data, 'kendaraan' => $kendaraan, 'top' => $top, 'mid' => $mid, 'driver' => $driver]);
});

Route::get('/approval', function () {
    $pemesanan = new Pemesanan();
    $data = $pemesanan->getDataPemesananByApprover(1);
    return view('layout-manager').view('approval', ['data' => $data]);
});

Route::get('/dashboard', function () {
    $pemesanan = new Pemesanan();
    $data = $pemesanan->getDataPemesanan();
    return view('layout-manager').view('dashboard', ['data' => $data]);
});

