<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProtectStaging
{
    public function handle(Request $request, Closure $next)
    {
        if (config('app.env') === 'staging') {
            if (!isset($_SERVER['PHP_AUTH_USER']) || 
                $_SERVER['PHP_AUTH_USER'] !== config('app.staging_username') || 
                $_SERVER['PHP_AUTH_PW'] !== config('app.staging_password')
            ) {
                header('WWW-Authenticate: Basic realm="Staging Area"');
                header('HTTP/1.0 401 Unauthorized');
                exit('Unauthorized');
            }
        }

        return $next($request);
    }
} 