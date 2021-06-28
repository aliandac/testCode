<?php

namespace App\Http\Middleware\Company;

use Closure;
use App\Services\Buying\Package\PackageBuying;
use App\Services\Buying\Statistics\Statistics;

class StatisticsMiddleware
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
        $statistics = new Statistics( session()->get('selected-company') );
        
        if ( $statistics->check() ) {
            return $next($request);
        }

        return redirect()->route('create_user')
                        ->with('message','İstatiklerinizi görebilmek için henüz bir firma oluşturmamışsınız.')
                        ->with('type','warning');
    }
}
