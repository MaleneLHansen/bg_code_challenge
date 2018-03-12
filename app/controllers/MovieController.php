<?php


class MovieController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::active()->get();
		return View::make('movie.index')->with('movies', $movies);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::get();
		$ratings = array(1,2,3,4,5,6,7,8,9,10);
		return View::make('movie.create')->with(['categories' => $categories, 'ratings' => $ratings]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$movie = new Movie(Input::all());
		$movie->save();
		return Redirect::route('movie.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($movie)
	{
		return View::make('movie.info')->with(['movie' => $movie]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($movie)
	{
		$categories = Category::get();
		$ratings = array(1,2,3,4,5,6,7,8,9,10);
		return View::make('movie.edit')->with(['categories' => $categories, 'ratings' => $ratings, 'movie' => $movie]);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($movie)
	{
		$movie->fill(Input::all());
		$movie->save();
		return Redirect::route('movie.index');	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($movie)
	{
		$movie->active = 0;
		$movie->save();
		return array('success' => true, 'id' => $movie->id);
	}


}
