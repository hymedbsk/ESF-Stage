<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;
use Closure;
use Auth;

use Illuminate\Http\Request;

class Secretaire
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
        if(Auth::user()->secretaire == 1 || Auth::user()->admin == 1){
            return $next($request);
        }

	return new RedirectResponse(url('/'));
    }
}
