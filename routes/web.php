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



Auth::routes();

Route::group(['middleware'=>'auth'], function(){
	Route::get('/', 'FrontController@index');
	Route::get('/dashboard', 'FrontController@dashboard');
	Route::get('/home', 'FrontController@index')->name('home');
	Route::resource('transaction', 'TransactionController');

	Route::group(['prefix'=>'admin'], function(){
		Route::resource('product', 'ProductController');
		Route::get('/product/datatable', 'ProductController@datatable');
		Route::get('/product/delete/{id}','ProductController@destroy' );
		// Route::get('/product', 'ProductController@index');
	});

	


});
