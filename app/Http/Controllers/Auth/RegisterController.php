<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\Auth\RegisterController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $req) {
        //return redirect('/');
        //var_dump($req);
        //exit;
        $validData = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            're_password' => 'required|same:password',
            'fname' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'lname' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'phoneNo' => 'required|min:6|max:15',
        ]);

        $result = DB::table('users')
                ->where('email', $req->input('email'))
                ->get();

        //$res = json_encode($result, true);
        if (sizeof($result) == 0) {
            $data = $req->input();
            $user = new User();
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->fname = $data['fname'];
            $user->lname = $data['lname'];
            //$encPw = Hash::make($data['password']);
            $user->phone = $data['phoneNo'];
            //$user->status = 'INACTIVE';
            $user->save();
            $req->session()->flash('reg_status', 'User is successfully registered');
            return redirect('/');
        } else {
            $req->session()->flash('reg_status', 'This Email already exist in our Database, it cannot be re-used');
            return redirect('/register');
        }
        /* return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          ]); */
    }

}
