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

Route::get('/', function() {
	return view ('home');
})->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/{id}/destroy', 'DashboardController@destroy')->name('destroy');

Route::get('{id}/edit', 'DashboardController@edit')->name('edit');

Route::put('{id}/edit', 'DashboardController@update')->name('update');

Route::group(['prefix' => 'articles'], function(){

	Route::get('view/{id}', 'TestController@view')->name('articlesView');
	
});
