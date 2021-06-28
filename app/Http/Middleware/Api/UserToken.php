<?php

namespace App\Http\Middleware\Api;

use App\Models\User\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class UserToken
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
        $user = Auth::user();
        if($request->input('token')==null){
            return response()->json(['message'=>'Token Bulunamadı'],404,array(['message'=>'Token Bulunamadı']));
        }
        if($user == null){
            $user = User::where('accessToken',$request->input('token'))->first();
            if(isset($user));
            return $next($request);
        }

        if($user->accessToken == $request->input('token')){
            return $next($request);
        }

        return response()->json(['message'=>'Token Bulunamadı'],404,array(['message'=>'Token Bulunamadı']));
    }
}
