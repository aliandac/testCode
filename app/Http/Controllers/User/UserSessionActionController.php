<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserSessionActionController extends Controller
{

    /**
     * @var string
     */
    private $redirect='home';

    /**
     * if you want  return redirect()->guest('login');
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function logout()
    {
         Auth::logout();
         return redirect()->route($this->redirect,app()->getLocale());
    }
}
