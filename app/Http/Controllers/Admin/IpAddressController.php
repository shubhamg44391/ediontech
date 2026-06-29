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
            
            // Check if geolocation details are missing or generic
            $needsUpdate = empty($existing->region) || empty($existing->country) || $existing->region === 'Unknown' || $existing->country === 'Unknown' || empty($existing->city) || $existing->city === 'Unknown';
            
            $updateData = ['updated_at' => now()];

            if ($needsUpdate && $ip !== '127.0.0.1' && $ip !== '::1') {
                try {
                    $response = @file_get_contents("http://ip-api.com/json/{$ip}");
                    if ($response) {
                        $location = json_decode($response);
                        if ($location && $location->status === 'success') {
                            $updateData['city'] = $location->city ?? $existing->city ?? 'Unknown';
                            $updateData['region'] = $location->regionName ?? 'Unknown';
                            $updateData['country'] = $location->country ?? 'Unknown';
                        }
                    }
                } catch (\Exception $e) {
                    // Silently ignore API errors
                }
            }

            DB::table('ip_addresses')->where('id', $existing->id)->update($updateData);
        } else {
            // Try to get the city based on IP
            $city = 'Unknown';
            $region = 'Unknown';
            $country = 'Unknown';
            try {
                // Ignore local IPs
                if ($ip !== '127.0.0.1' && $ip !== '::1') {
                    $response = @file_get_contents("http://ip-api.com/json/{$ip}");
                    if ($response) {
                        $location = json_decode($response);
                        if ($location && $location->status === 'success') {
                            $city = $location->city ?? 'Unknown';
                            $region = $location->regionName ?? 'Unknown';
                            $country = $location->country ?? 'Unknown';
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
                'region' => $region,
                'country' => $country,
                'visited' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    // Method to log page views page-wise
    public static function logPageView(Request $request)
    {
        $ip = $request->ip();
        $path = $request->path();

        if (empty($path)) {
            $path = '/';
        }

        // Check if page view already exists for this IP and path
        $existing = DB::table('page_views')
            ->where('ip_address', $ip)
            ->where('page_path', $path)
            ->first();

        if ($existing) {
            DB::table('page_views')
                ->where('id', $existing->id)
                ->increment('views', 1, ['updated_at' => now()]);
        } else {
            DB::table('page_views')->insert([
                'page_path' => $path,
                'ip_address' => $ip,
                'views' => 1,
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