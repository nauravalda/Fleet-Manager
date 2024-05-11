<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    public function UsagePerMonth()
    {
        // For a dynamic bar chart you can pass "Data" from the controller.
        $data= PemesananView::selectRaw('MONTHNAME(created_at) as month, COUNT(id) as total')->where('status_1', 1)->where('status_2', 1)
            ->groupBy('month')
            ->get();
        return $data;
    }

    public function PemesananPerMonth()
    {
        // For a dynamic bar chart you can pass "Data" from the controller.
        $data= PemesananView::selectRaw('MONTHNAME(created_at) as month, COUNT(id) as total')
            ->groupBy('month')
            ->get();
            return $data;
    }


    public function FLeetUsage()
    {
        // For a dynamic bar chart you can pass "Data" from the controller.
        $data= PemesananView::selectRaw('kendaraan_nama,no_polisi, COUNT(id) as total')
            ->groupBy('kendaraan_nama')
            ->get();

        return $data;
    }

    public function UsagePerRegion()
    {
        // For a dynamic bar chart you can pass "Data" from the controller.
        $data= PemesananView::selectRaw('lokasi,region, COUNT(id) as total')
            ->groupBy('region')
            ->get();
        return $data;
    }

    public function UsagePerDriver()
    {
        // For a dynamic bar chart you can pass "Data" from the controller.
        $data= PemesananView::selectRaw('driver_nama, COUNT(id) as total')
            ->groupBy('driver_nama')
            ->get();
        return $data;
    }



}
