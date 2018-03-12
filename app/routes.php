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

Route::bind('comment', function($id){
	return Comment::find($id);
});

Route::get('/', ['as' => 'movie.index', 'uses' => 'MovieController@index']);

Route::group(array('prefix' => 'movie'), function(){
	Route::get('/create', ['as' => 'movie.create' ,'uses' =>'MovieController@create']);
	Route::post('/create', ['as' => 'movie.store' ,'uses' =>'MovieController@store']);
	Route::get('/edit/{movie}', ['as' => 'movie.edit' ,'uses' =>'MovieController@edit']);
	Route::put('/edit/{movie}', ['as' => 'movie.update' ,'uses' =>'MovieController@update']);
	Route::delete('/delete/{movie}', ['as' => 'movie.delete' ,'uses' =>'MovieController@destroy']);
	Route::get('/info/{movie}', ['as' => 'movie.info', 'uses' => 'MovieController@show']);
	Route::get('/{movie}/new-comment', ['as' => 'comment.add', 'uses' => 'CommentController@create']);
	Route::post('/{movie}/new-comment', ['as' => 'comment.store', 'uses' => 'CommentController@store']);
});

Route::group(array('prefix' => 'comment'), function(){
	Route::get('/edit/{comment}', ['as' => 'comment.edit', 'uses' => 'CommentController@edit']);
	Route::put('/edit/{comment}', ['as' => 'comment.update', 'uses' => 'CommentController@update']);
	Route::delete('/delete/{comment}', ['as' => 'movie.delete' ,'uses' =>'CommentController@destroy']);
});