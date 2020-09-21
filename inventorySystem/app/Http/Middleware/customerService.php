<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class customerService
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
        if($request->user()->custumerService == true )
        {
            return $next($request);
        }
        return redirect('./loginForm');
    }
}
