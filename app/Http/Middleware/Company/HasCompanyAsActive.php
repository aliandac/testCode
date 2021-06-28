<?php

namespace App\Http\Middleware\Company;

use Closure;

class HasCompanyAsActive
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
        if ( !isset(auth()->user()->companies[0]) || !isset(auth()->user()->companies[0]->tax_number) ) {
            return back()->with('message', 'Bir Firmanız Mevcut Değildir. Varsa Firmanız Henüz Onaylanmamıştır.')->with('type', 'warning');
        }

        return $next($request);
    }
}
