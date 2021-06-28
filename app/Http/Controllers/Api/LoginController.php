<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

   public function login(){
       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
           $user = Auth::user();
           $success['token'] =  $user;
           return response()->json(['success' => $success], 200);
       }
       else{
           return response()->json(['error'=>'Unauthorised'], 401);
       }
   }
}
