<?php

class Movie extends Eloquent {

	public function genre()
	{
		return $this->belongsTo('Genre');
	}

}