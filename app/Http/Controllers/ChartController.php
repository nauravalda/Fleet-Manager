<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Dashboard;


class ChartController extends Controller
{
    public function index()
    {
        $dashboard = new Dashboard();
        $usagePerMonth = $dashboard->UsagePerMonth();
        $pemesananPerMonth = $dashboard->PemesananPerMonth();
        $fleetUsage = $dashboard->FLeetUsage();
        $usagePerRegion = $dashboard->UsagePerRegion();
        $usagePerDriver = $dashboard->UsagePerDriver();
        return view('chart', ['usagePerMonth' => $usagePerMonth, 'pemesananPerMonth' => $pemesananPerMonth, 'fleetUsage' => $fleetUsage, 'usagePerRegion' => $usagePerRegion, 'usagePerDriver' => $usagePerDriver]);
    }

    public function barChartUsagePerMonth(){
        $dashboard = new Dashboard();
        $usagePerMonth = $dashboard->UsagePerMonth();
        return response()->json($usagePerMonth);

    }
}