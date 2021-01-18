<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
            if (strtolower(Auth::user()->role->name) === 'administrateur'){
                return redirect()->route('dashboard');
            }else if (strtolower(Auth::user()->role->name) === 'illustrateur'){
                return redirect()->route('illustrations.index');
            }
        }

        return $next($request);
    }
}
