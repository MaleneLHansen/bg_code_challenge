<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::bind('movie', function($id){
	return Movie::find($id);
});

Route::get('/', ['as' => 'movie.index', 'uses' => 'MovieController@index']);
Route::get('/movie/create', ['as' => 'movie.create' ,'uses' =>'MovieController@create']);
Route::post('/movie/create', ['as' => 'movie.store' ,'uses' =>'MovieController@store']);
Route::get('/movie/edit/{movie}', ['as' => 'movie.edit' ,'uses' =>'MovieController@edit']);
Route::put('/movie/edit/{movie}', ['as' => 'movie.update' ,'uses' =>'MovieController@update']);
Route::delete('/movie/delete/{movie}', ['as' => 'movie.delete' ,'uses' =>'MovieController@destroy']);
Route::get('movie/info/{movie}', ['as' => 'movie.info', 'uses' => 'MovieController@show']);