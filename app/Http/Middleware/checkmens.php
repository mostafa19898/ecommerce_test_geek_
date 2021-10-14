<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkmens
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
        $user =  Auth::check();
        $user = Auth::user()->type;
        if($user == 0){
            
          return redirect()->route('not.adult');
        }
            return $next($request);
         
      
    }
}
