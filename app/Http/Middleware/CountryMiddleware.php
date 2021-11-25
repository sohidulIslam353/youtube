<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //curriculum role rules
        $array=[
            'Bangladesh',
            'America',
            'Canada',
            'Africa',
        ];

        if (in_array($request->country, $array)) {
            return $next($request);
        }

        return redirect()->to('/');

        
    }
}
