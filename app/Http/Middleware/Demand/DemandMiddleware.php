<?php

namespace App\Http\Middleware\Demand;

use Closure;
use App\Services\Buying\Demand\Demand;

class DemandMiddleware
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
        $demand = new Demand();
        if ( $demand->check() ) {
            return $next($request); 
        }

        return redirect()->route('demands');
    }
}
