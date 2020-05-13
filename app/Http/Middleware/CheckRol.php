<?php

namespace App\Http\Middleware;

use Closure;

class CheckRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   $rol = auth()->user()->rol;
        $rol = trim($rol);
        if($rol == 'Admin')
        {
            return $next($request);
        }
        return redirect('/');
    }
}
