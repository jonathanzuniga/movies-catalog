<h2>Add new movie</h2>

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

{{ Form::open(array('route' => 'movies.store')) }}
	<p>
		{{ Form::label('title') }}
		{{ Form::text('title') }}
	</p>

	<p>
		{{ Form::label('year') }}
		{{ Form::text('year') }}
	</p>

	<p>
		{{ Form::label('duration') }}
		{{ Form::text('duration') }}
	</p>

	<p>
		{{ Form::label('genre_id', 'Genre') }}
		{{ Form::select('genre_id', $genres) }}
	</p>

	<p>
		{{ Form::label('director') }}
		{{ Form::text('director') }}
	</p>

	<p>
		{{ Form::label('writers') }}
		{{ Form::text('writers') }}
	</p>

	<p>
		{{ Form::label('cast') }}
		{{ Form::textarea('cast') }}
	</p>

	<p>
		{{ Form::label('poster') }}
		{{ Form::file('poster') }}
	</p>
	{{ Form::submit('Save movie') }}
{{ Form::close() }}