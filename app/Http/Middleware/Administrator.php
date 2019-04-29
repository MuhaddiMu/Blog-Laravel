<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Administrator
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

        if(!Auth::check()){
            return redirect('/');
        } else {
            $User = Auth::user();
            if($User->hasRole('Admin')){
                return $next($request);
            } else {
                return redirect('/');
            }
        }
        
    }
}
