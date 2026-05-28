<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IpAddressController extends Controller
{
    // Method to store IP and increment visit count
    public static function logIp(Request $request)
    {
        $ip = $request->ip();

        // Check if IP already exists
        $existing = DB::table('ip_addresses')->where('ip_address', $ip)->first();

        if ($existing) {
            // Increment the visit count
            DB::table('ip_addresses')->where('id', $existing->id)->increment('visited');
            DB::table('ip_addresses')->where('id', $existing->id)->update(['updated_at' => now()]);
        } else {
            // Try to get the city based on IP
            $city = 'Unknown';
            try {
                // Ignore local IPs
                if ($ip !== '127.0.0.1' && $ip !== '::1') {
                    $response = @file_get_contents("http://ip-api.com/json/{$ip}");
                    if ($response) {
                        $location = json_decode($response);
                        if ($location && $location->status === 'success') {
                            $city = $location->city;
                        }
                    }
                }
            } catch (\Exception $e) {
                // Silently ignore API errors
            }

            // Store new IP
            DB::table('ip_addresses')->insert([
                'ip_address' => $ip,
                'city' => $city,
                'visited' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

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