<?php

class Genre extends Eloquent {

	public $timestamps = false;

	public function movies()
	{
		return $this->hasMany('Movie');
	}

}