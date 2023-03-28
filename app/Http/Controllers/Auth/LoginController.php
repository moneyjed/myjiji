<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use App\Http\Controllers\Auth\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Http\Request;
use DB;
use Auth;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $req) {
        //$credentials = $req->only('email', 'password');
        $validData = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        //var_dump($validData);
        //exit;
        if (Auth::attempt($validData)) {
//            echo 'it is here validated';
//            exit;
            // Authentication passed...
            //Session::put('userName', $value);
            $req->session()->flash('msg', 'You are successfully logged in');
            return redirect('/');
            //return redirect()->intended('dashboard');
        } else {
//            echo 'it is not here';
//            exit;
            $req->session()->flash('err', 'The login credentials you entered are incorrect');
            return redirect('/');
        }
    }

    /* public function login() {
      $this->middleware('guest')->except('logout');
      } */
}
