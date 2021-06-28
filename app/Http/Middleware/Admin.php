<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        
            $user=auth()->user()->type;
        
            if ($user!='admin') {
                abort(404, 'Page not found');
            }else{
        

        return $next($request);}
    }

     
}
 