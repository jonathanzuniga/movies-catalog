<h2>Edit movie</h2>

<p>
	{{ link_to_route('movies.index', 'Back') }}
</p>

@if($errors->has())
<div>
	<p>The following errors have occurred:</p>

	<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
</div>
@endif

{{ Form::model($movie, array('method' => 'put', 'route' => array('movies.update', $movie->id))) }}
	<p>
		{{ Form::label('title') }}
		{{ Form::text('title', $movie->title) }}
	</p>

	<p>
		{{ Form::label('year') }}
		{{ Form::text('year', $movie->year) }}
	</p>

	<p>
		{{ Form::label('duration') }}
		{{ Form::text('duration', $movie->duration) }}
	</p>

	<p>
		{{ Form::label('genre_id', 'Genre') }}
		{{ Form::select('genre_id', $genres, $movie->genre_id) }}
	</p>

	<p>
		{{ Form::label('director') }}
		{{ Form::text('director', $movie->director) }}
	</p>

	<p>
		{{ Form::label('writers') }}
		{{ Form::text('writers', $movie->writers) }}
	</p>

	<p>
		{{ Form::label('cast') }}
		{{ Form::textarea('cast', $movie->cast) }}
	</p>

	<p>
		{{ Form::label('poster') }}
		{{ Form::file('poster') }}
	</p>
	{{ Form::submit('Update movie') }}
{{ Form::close() }}