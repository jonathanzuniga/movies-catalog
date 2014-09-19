<p>{{ link_to_route('movies.index', 'Back') }}</p>

<h2>{{ $movie->title }}</h2>

<?php

include('imdb.php');

$imdb = new Imdb();
$movieArray = $imdb->getMovieInfo('"' . $movie->title . '"', false);
$poster = $movieArray['poster'];

?>

<img alt="{{ $movie->title }}" src="{{ $poster }}" />

<p>Year: {{ $movie->year }}</p>

<p>Duration: {{ $movie->duration }}</p>

<p>Genre: {{ $movie->genre->name }}</p>

<p>Director: {{ $movie->director }}</p>

<p>Writer(s): {{ $movie->writers }}</p>

<p>Cast: {{ $movie->cast }}</p>
