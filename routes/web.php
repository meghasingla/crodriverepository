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
    return view('index');
});
Route::get('contact','ContactController@send');

/*Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('user', array('as' => 'user.index', 'uses' => 'UserController@index'));
Route::get('user/register', array('as' => 'user.register', 'uses' => 'UserController@register'));
Route::post('user/store', array('as' => 'user.store', 'uses' => 'UserController@store'));
Route::get('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::post('user/authenticate', array('as' => 'user.authenticate', 'uses' => 'UserController@authenticate'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout'));
Route::get('user/account', array('as' => 'user.account', 'uses' => 'UserController@account'))->middleware('auth');