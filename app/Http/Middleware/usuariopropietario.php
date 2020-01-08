<?php

namespace App\Http\Middleware;

use Closure;

class usuariopropietario
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
    if(Auth::user()->owner()){
        return $next($request);
    }else{
        return redirect('/');
    }
    }
}
