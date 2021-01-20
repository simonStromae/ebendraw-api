<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAccess
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
        if (strtolower(Auth::user()->role->name) != 'administrateur'){
            notify()->warning('Désolé ! Mais vous ne disposez pas des accès nécessaire pour vous rendre à la page que vous souaitez accéder', 'Accès non autorisé');
            return redirect()->route('illustrations.index');
        }
        return $next($request);
    }
}
