<?php

class Movie extends Eloquent {

	public static $rules = array(
			'title' => 'required'
	);

	public function genre() {
		return $this->belongsTo('Genre');
	}

}