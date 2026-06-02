<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\IpAddressController;

class LogVisitorIp
{
    public function handle(Request $request, Closure $next)
    {
        // Only log GET requests and exclude AJAX, admin, and background routes
        if ($request->isMethod('GET') && !$request->ajax() && !$request->is('admin*') && !$request->is('clear*') && !$request->is('api*')) {
            try {
                IpAddressController::logIp($request);
            } catch (\Exception $e) {
                // Silently ignore to avoid breaking any visitor request
            }
        }

        return $next($request);
    }
}
