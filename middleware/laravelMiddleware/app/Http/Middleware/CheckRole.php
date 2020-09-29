<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        // dd(Auth::user()->role);
        if (Auth::user()->role == 'super admin') {
            if ($request->getRequestUri() == "/route1") {
                return $next($request);
            }elseif($request->getRequestUri() == "/route2"){
                return $next($request);
            }           
        }elseif(Auth::user()->role === 'admin'){
            if ($request->getRequestUri() == "/route2") {
                return $next($request);
            }
        }

        return redirect('home');
    }
}
