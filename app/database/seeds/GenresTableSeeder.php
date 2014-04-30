<?php

use Faker\Factory as Faker;

class GenresTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Genre::truncate();

		$genres = array(
			'Action',
			'Adventure',
			'Animation',
			'Biography',
			'Comedy',
			'Crime',
			'Documentary',
			'Drama',
			'Family',
			'Fantasy',
			'Film-Noir',
			'History',
			'Horror',
			'Musical',
			'Mystery',
			'Romance',
			'Sci-Fi',
			'Sport',
			'Thriller',
			'War',
			'Western',
		);

		foreach($genres as $genre)
		{
			Genre::create(array('name' => $genre));
		}
	}

}