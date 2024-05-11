<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class GraphController extends Controller
{
    public function index(){
        $dashboard = new Dashboard();
        $usagePerMonth = $dashboard->UsagePerMonth();
        $pemesananPerMonth = $dashboard->PemesananPerMonth();
        $fleetUsage = $dashboard->FLeetUsage();
        $usagePerRegion = $dashboard->UsagePerRegion();
        $usagePerDriver = $dashboard->UsagePerDriver();
        return view('google-bar-chart', ['usagePerMonth' => $usagePerMonth]);
    }
}
