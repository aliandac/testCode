<?php

namespace App\Http\Middleware\Company;

use Closure;
use App\Models\Company\Company;
use App\Scopes\ActiveScope;

class HasCompanyAsInactive
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
        if ( Company::withoutGlobalScope(ActiveScope::class)->where('user_id',auth()->id())->exists() ) {
            return back()->with('message', 'Onaylanmamış bir firmanız zaten mevcuttur.')->with('type', 'info');
        }
        
        return $next($request);
    }
}