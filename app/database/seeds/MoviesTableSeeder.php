<?php

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		Movie::create(array(
			'cast'     => 'Idris Elba, Charlie Hunnam, Rinko Kikuchi',
			'director' => 'Guillermo del Toro',
			'duration' => '132 min',
			'genre_id' => 1,
			'title'    => 'Pacific Rim',
			'writers'  => 'Travis Beacham, Guillermo del Toro',
			'year'     => '2013',
		));

		Movie::create(array(
			'cast'     => 'Bruce Dern, Will Forte, June Squibb',
			'director' => 'Alexander Payne',
			'duration' => '115 min',
			'genre_id' => 8,
			'title'    => 'Nebraska',
			'writers'  => 'Bob Nelson',
			'year'     => '2013',
		));

		Movie::create(array(
			'cast'     => 'Christian Bale, Amy Adams, Bradley Cooper',
			'director' => 'David O. Russell',
			'duration' => '138 min',
			'genre_id' => 6,
			'title'    => 'American Hustle',
			'writers'  => 'Eric Warren Singer, David O. Russell',
			'year'     => '2013',
		));
	}

}