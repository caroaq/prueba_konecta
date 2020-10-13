<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('user','App\Http\Controllers\UserController@index');
//Route::get('user/create','App\Http\Controllers\UserController@create');

Route::resource('user','App\Http\Controllers\UserController')->middleware('admin');
Route::resource('client','App\Http\Controllers\ClientController')->middleware('auth');

//Route::resource('welcome', 'App\Http\Controllers\LoginController');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
