<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth\Session;
use Session;

class LogoutController extends Controller {

    //

    public function logout(Request $req) {
        //Auth::logout();
        //$req->session()->forget('userName');
        Session::flush(); // removes all session data
        $req->session()->flash('msg', 'You are now logged out!');
        return redirect('/');
    }

}
