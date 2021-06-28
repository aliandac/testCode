<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request) {
        if($request->session()->has('my_name'))
            echo $request->session()->get('my_name');
        else
            echo 'No data in the session';
    }
    public function storeSessionData(Request $request) {
        $request->session()->put($request->input('policy'),'1');
        return back()->with('type','success')->with('message','Teşekkür Ederiz Kazançlı Günler Dileriz.');
    }
    public function deleteSessionData(Request $request) {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
    }
}
