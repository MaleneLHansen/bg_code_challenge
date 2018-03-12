<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($movie)
	{
		return View::make('movie.comment.create')->with('movie', $movie);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$comment = new Comment(Input::all());
		$comment->save();
		Session::put('message', 'Kommentaren blev oprettet');
		return Redirect::route('movie.info', $comment->movie_id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($comment)
	{
		return View::make('movie.comment.update')->with('comment', $comment);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($comment)
	{
		$comment->fill(Input::all());
		$comment->save();
		Session::put('message', 'Kommentaren blev opdateret');
		return Redirect::route('movie.info', $comment->movie_id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($comment)
	{
		$comment->active = 0;
		$comment->save();
		return array('success' => true, 'id' => $comment->id);
	}


}
