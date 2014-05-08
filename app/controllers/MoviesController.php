<?php

class MoviesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$genres = array();

		foreach(Genre::all() as $genre) {
			$genres[$genre->id] = $genre->name;
		}

		return View::make('movies.index')
			->with('genres', $genres)
			->with('movies', Movie::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$genres = array();

		foreach(Genre::all() as $genre) {
			$genres[$genre->id] = $genre->name;
		}

		$movies = '';

		return View::make('movies.create')
			->with('genres', $genres)
			->with('movies', $movies);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$movie = new Movie;
		$movie->cast = Input::get('cast');
		$movie->director = Input::get('director');
		$movie->duration = Input::get('duration');
		$movie->genre_id = Input::get('genre_id');
		$movie->poster = Input::get('poster');
		$movie->title = Input::get('title');
		$movie->writers = Input::get('writers');
		$movie->year = Input::get('year');
		$movie->save();

		if ($movie) {
			return Redirect::to('movies')
				->with('message', 'Movie saved.');
		}

		return Redirect::to('movies')
			->with('message', 'Something went wrong, please try again.');
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
	public function edit($id)
	{
		$genres = array();

		foreach(Genre::all() as $genre) {
			$genres[$genre->id] = $genre->name;
		}

		$movie = Movie::find($id);

		return View::make('movies.edit')
			->with('genres', $genres)
			->with('movie', $movie);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Movie::$rules);

		if ($validator->passes()) {
			$movie = Movie::find($id);
			$movie->cast = Input::get('cast');
			$movie->director = Input::get('director');
			$movie->duration = Input::get('duration');
			$movie->genre_id = Input::get('genre_id');
			$movie->poster = Input::get('poster');
			$movie->title = Input::get('title');
			$movie->writers = Input::get('writers');
			$movie->year = Input::get('year');
			$movie->save();

			if ($movie) {
				return Redirect::to('movies')
					->with('message', 'Movie updated.');
			}
		}

		return Redirect::back()
			->with('message', 'Something went wrong, please try again.')
			->withErrors($validator)
			->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$movie = Movie::find($id);

		if ($movie) {
			$movie->delete();
			return Redirect::to('movies')
				->with('message', 'Movie deleted.');
		}

		return Redirect::to('movies')
			->with('message', 'Something went wrong, please try again.');
	}

}