<h2>Movies</h2>

<p>
	{{ link_to_route('movies.create', 'Add movie') }}
</p>

@if (Session::has('message'))
	<p>{{ Session::get('message') }}</p>
@endif

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

<ul>
@foreach($movies as $movie)
	<li>
		{{ $movie->title }}
		{{ link_to_route('movies.show', 'Show', $movie->id) }}
		{{ link_to_route('movies.edit', 'Edit', $movie->id) }}
		{{ Form::open(array('method' => 'delete', 'route' => array('movies.destroy', $movie->id))) }}
			{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</li>
@endforeach
</ul>