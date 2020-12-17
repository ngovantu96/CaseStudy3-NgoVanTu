<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $user;
    public function handle(Request $request, Closure $next,$guard = 'user')
    {
        if(Auth::guard($guard)->check()){
            return $next($request);
        }
        return redirect()->route('user.index');
    }
}
