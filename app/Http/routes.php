<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'auth'], function(){
	Route::resource('/products', 'ProductsController');
	Route::resource('/customers', 'CustomersController');
});
// Authentication routes...
Route::get( '/', function(){
	if (Auth::check())
		return \Redirect::to('products');
	return view('welcome');
} );
Route::get( '/login', [ 'as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin' ] );
Route::post( '/login', [ 'as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin' ] );
Route::get( '/logout', 'Auth\AuthController@getLogout' );