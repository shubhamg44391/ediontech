<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\IpAddressController;

class LogVisitorIp
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Sirf successful HTTP 200 GET requests aur strictly Frontend Controllers ke routes ko hi log karein
        if ($request->isMethod('GET') && !$request->ajax() && $response->getStatusCode() === 200) {
            $route = $request->route();
            $action = $route ? $route->getActionName() : '';

            // Check if controller belongs to Frontend namespace
            if (str_contains($action, 'App\Http\Controllers\Frontend\\')) {
                try {
                    IpAddressController::logIp($request);
                    IpAddressController::logPageView($request);
                } catch (\Exception $e) {
                    // Silently ignore to prevent breaking visitor requests
                }
            }
        }

        return $response;
    }
}
