<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if(auth()->user()->Persona->idRoles  == 1){
            return $next($request);
        }else{
            return redirect('/')->with('error','Acceso denegado');
        }
    }
}
