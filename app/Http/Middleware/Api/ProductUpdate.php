<?php

namespace App\Http\Middleware\Api;

use App\Models\Product\Product;
use App\Models\User\User;
use Closure;

class ProductUpdate
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
        $user = User::where('accessToken',$request->input('token'))->first();
        $product =  Product::findOrFail($request->input('id'));
        if($product->company == $user->getCompany[0]->id){
        return $next($request);
        }else{
            return response()->json(['message'=>'Ürün Id Dogru Değil'],404,array(['message'=>'Ürün Id Dogru Değil']));
        }
    }
}
