<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Category;
use App\Http\Controllers\HomeController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
//Route::get('/', 'HomeController@index');

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/next', function () {
    return view('next');
});
Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/', function () {
  if (Auth::check()) {
  echo 'it is here';
  exit;
  } else {
  echo 'it is not';
  exit;
  }
  }); */

//Route::post('/registerUser', 'RegisterController@create');
Route::post('/registerUser', [RegisterController::class, 'create']);
Route::post('/loginUser', [LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout']);
//Route::post('/loginUser', [LoginController::class, 'login'])->name('loginUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
