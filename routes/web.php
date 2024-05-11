<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\Kendaraan;
use App\Models\User;
use App\Models\Driver;
use App\Models\Pemesanan;
use App\Models\PemesananView;
use App\Models\Dashboard;



Route::get('/', function () {

    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::post('/login', 'App\Http\Controllers\AuthController@actionlogin');

Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::post('/pemesanan', 'App\Http\Controllers\PemesananController@store');

Route::post('/update-status', 'App\Http\Controllers\PemesananController@updateStatus')->name('update-status');



Route::get('/login', function () {
    
    return view('login');
});




Route::get('/pemesanan', function () {
    if (auth()->user()->role == 'admin') {
        $data = new Kendaraan();
        $kendaraan = $data->getDataKendaraan();
        $user = new User();
        $top = $user->getDataTopLevel();
        $mid = $user->getDataMidLevel();
        $driver = new Driver();
        $driver = $driver->getDataDriver();
        return view('layout-admin', ['current_user'=> auth()->user()]).view('pemesanan', ['kendaraan' => $kendaraan, 'top' => $top, 'mid' => $mid, 'driver' => $driver, 'current_user' => auth()->user()]);
    } 
    else {
        return redirect('/');
    }

});

    

Route::get('/home', function () {
    if (auth()->user()->role == 'admin') {
        $pemesanan = new PemesananView();
        $kendaraan = new Kendaraan();
        $user = new User();
        $data = $pemesanan->getDataPemesananByAdmin(auth()->user()->id);
        $kendaraan = $kendaraan->getDataKendaraan();
        $top = $user->getDataTopLevel();
        $mid = $user->getDataMidLevel();
        $driver = new Driver();
        $driver = $driver->getDataDriver();
        return view('layout-admin', ['current_user'=> auth()->user()]).view('home', ['data' => $data, 'kendaraan' => $kendaraan, 'top' => $top, 'mid' => $mid, 'driver' => $driver, 'current_user' => auth()->user()]);
    } 
    else {
        return redirect('/');
    }
});

Route::get('/approval', function () {
    if (auth()->user()->role == 'top-lvl' || auth()->user()->role == 'mid-lvl'){
        $pemesanan = new Pemesanan();
        $pemesananView = new PemesananView(); 
        $data = $pemesanan->getDataPemesananByApproverNeedApproval(auth()->user()->id )  ;
        $view = $pemesananView->getDataPemesananByApproverNeedApproval(auth()->user()->id);
        $history = $pemesananView->getHistoryDataPemesananByApprover(auth()->user()->id);
        return view('layout-manager', ['current_user'=> auth()->user()]).view('approval', ['data' => $data, 'current_user' => auth()->user(), 'view' => $view, 'history' => $history]);
    } 
    else {
        return redirect('/');
    }
});

Route::get('/dashboard', function () {
    if (auth()->user()->role == 'top-lvl' || auth()->user()->role == 'mid-lvl'){
        $pemesanan = new PemesananView();
        $data = $pemesanan->getDataPemesanan();
        $totalApproved = $pemesanan->totalPemesananApproved();
        $totalRejected = $pemesanan->totalPemesananRejected();
        $totalPending = $pemesanan->totalPemesananPending();
        $dashboard = new Dashboard();
        $usagepermonth = $dashboard->UsagePerMonth();
        $pemesananpermonth = $dashboard->PemesananPerMonth();
        $fleetusage = $dashboard->FLeetUsage();
        $usageperregion = $dashboard->UsagePerRegion();
        $usageperdriver = $dashboard->UsagePerDriver();

        $report_dashboard = [
            // 'usagepermonth' => $usagepermonth,
            // 'pemesananpermonth' => $pemesananpermonth,
            // 'fleetusage' => $fleetusage,
            // 'usageperregion' => $usageperregion,
            // 'usageperdriver' => $usageperdriver
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('layout-manager', ['current_user'=> auth()->user()]).view('dashboard', ['data' => $data, 'current_user' => auth()->user(), 'totalApproved' => $totalApproved, 'totalRejected' => $totalRejected, 'totalPending' => $totalPending, 'report_dashboard' => $report_dashboard]);
    } 
    else {
        return redirect('/');
    }

});

