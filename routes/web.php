<?php

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
    return view('user.connexion');
});


Route::post('/dashboard', 'LoginController@store');


Route::get('/dashboard-co', 'DashboardController@index');
Route::get('/logout', 'LoginController@Logout');

Route::get('/register', 'RegisterController@create');
Route::post('/regist', 'RegisterController@keep');