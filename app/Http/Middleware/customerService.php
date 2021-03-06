<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
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
        if($request->user()!= null && $request->user()->custumerService == true )
        {
            return $next($request);
        }
        else
         {
            Auth::logout();
           return redirect('/loginForm');
         }   
    }
}
