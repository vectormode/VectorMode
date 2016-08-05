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
Route::group(['middleware' => 'auth'], function() {

	Route::resource('/products', 'ProductsController');
	Route::resource('/customers', 'CustomersController');
	Route::resource('/users', 'UsersController');
	Route::resource('/suppliers', 'SuppliersController');
	Route::resource('/stores', 'StoresController');
    Route::resource('/stocks', 'StocksController');
    Route::resource('/orders', 'OrdersController');
    Route::resource('/refunds', 'RefundsController');

	Route::get('/db-backup', array('as' => 'db-backup', 'uses' => 'UsersController@dbBackup'));

});
// Authentication routes...
Route::get( '/', function(){
	if (Auth::check())
		return \Redirect::to('products');
	return view('welcome');
} );
Route::get( '/login', [ 'as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin' ] );
Route::post( '/login', [ 'as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin' ] );
Route::get( '/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'] );