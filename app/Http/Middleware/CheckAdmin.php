<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Flash;


class CheckAdmin
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
        if(Auth::user()->role_id != 1){
            Flash::error('Sorry, you have no permission to view this.');
            return redirect('/transactions');
        }
        return $next($request);
    }
}
