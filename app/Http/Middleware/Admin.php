<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
      if(!$request->user())
      {
        dd('Inicie sesión primero');
      }
      else {

        if( $request->user()->Admin())
        {
          return $next($request);
        }
        else {
          return Response()->view('errors.401');
        }
          return $next($request);
      }

      }

}
