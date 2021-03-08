<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UjiCoba
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
        dd($request->account);
        return $next($request);
    }
}
