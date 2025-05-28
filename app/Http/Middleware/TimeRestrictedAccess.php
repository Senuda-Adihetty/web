<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use App\Models\Settings;


class TimeRestrictedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentTime = Carbon::now()->format('H:i');

        $startTime = '06:00';
        $endTime = '02:15';

        if ($currentTime >= $startTime && $currentTime <= $endTime) {
            return $next($request); // Allow access
        }else{
            // return response()->json(['message' => 'Time restricted access. Please try again.'.$currentTime], 403);
            $setting = Settings::all()->pluck('value', 'key')->toArray();
             return response()->view('frontend.404notfound', compact('setting'), 403);
        }
    }
}
