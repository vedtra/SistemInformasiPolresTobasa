<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 1)
                return redirect('admin');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'masyarakat')
                return redirect('masyarakat');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 2)
                return redirect('kapolres');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 3)
                return redirect('bagops');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 4)
                return redirect('basumda');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 5)
                return redirect('bagren');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 6)
                return redirect('sium');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 7)
                return redirect('reserse');
        }
        return $next($request);
    }
}
