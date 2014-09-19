<?php

class Movie extends Eloquent {

	public static $rules = array(
		'title' => 'required',
		'year' => 'required',
		'genre' => 'required',
		'director' => 'required',
		'writers' => 'required',
		'cast' => 'required'
	);

	public function genre() {
		return $this->belongsTo('Genre');
	}

}