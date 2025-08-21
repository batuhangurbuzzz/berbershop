<?php

namespace App\Http\Middleware;

use App\Models\MainSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = MainSetting::pluck('value','key')->toArray();

        view()->share('settings', $settings);

        return  $next($request);
    }
}
