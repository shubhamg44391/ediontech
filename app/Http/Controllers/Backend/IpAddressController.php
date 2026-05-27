<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IpAddressController extends Controller
{
    // Method to display all IP addresses and their details
    
    public function getIPAddresses()
    {
        return DB::table('ip_addresses')->orderBy('id', 'desc')->paginate(10);
    }
    public function getTotalIPCount()
    {
        return DB::table('ip_addresses')->sum('visited');
    }
    public function showCityVisitorChart()
    {
        // Retrieve visitor count for each city
        return DB::table('ip_addresses')
        ->select('city', DB::raw('SUM(visited) as total_visitors'))
        ->groupBy('city')
        ->get();
    }
    public function getAllCities()
{
    return DB::table('ip_addresses')
        ->select('city')
        ->distinct()
        ->pluck('city')
        ->all();
}
}