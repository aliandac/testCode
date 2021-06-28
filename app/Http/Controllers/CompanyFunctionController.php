<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company\Company;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompanyFunctionController extends Controller
{
    public function index()
    {
        $company = Company::where('email','<>',null)->where('email','<>',"")->where('user_id',null)->get();
        // dd($company);

        foreach ( $company as $value) {
            if(!User::where('email',$value->email)->count()){
                $user = User::create([
                    'email'     => $value->email,
                    'password'  => Hash::make(Str::random(8)),
                    'name'      => 'Noname',
                ]);

                $value->user_id = $user->id;
                $value->save();
            }

        }
    }
}
