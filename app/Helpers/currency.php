<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

if (!function_exists('format_price')) {

    function format_price($priceInInr)
    {
        $ip = request()->ip();

        /*
        |--------------------------------------------------------------------------
        | Testing IPs
        |--------------------------------------------------------------------------
        | Uncomment any IP below for testing
        */

        // USA
        // $ip = '8.8.8.8';

        // India
        // $ip = '103.21.244.0';

        // UK
        // $ip = '51.140.0.1';

        // UAE
        // $ip = '94.200.0.1';


        // Local development
        if ($ip == '127.0.0.1' || $ip == '::1') {
            $countryCode = 'IN';
        } else {

            // Cache country code for 24 hours
            $countryCode = Cache::remember(
                'country_code_' . $ip,
                60 * 24,
                function () use ($ip) {

                    try {

                        $response = Http::timeout(3)
                            ->get("http://ip-api.com/json/{$ip}");

                        if ($response->successful()) {
                            return $response->json('countryCode');
                        }

                    } catch (\Exception $e) {
                        return 'IN';
                    }

                    return 'IN';
                }
            );
        }

        // INR
        if ($countryCode === 'IN') {

            return '₹' . number_format($priceInInr, 2);

        } else {

            // INR to USD conversion
            $priceInUsd = $priceInInr / 83;

            return '$' . number_format($priceInUsd, 2);
        }
    }
}