<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Reseller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role_id == '2') {
            return $next($request);
        }
        abort(403);
    }
}
