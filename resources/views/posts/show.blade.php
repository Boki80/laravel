@extends ('layouts.app')

@section ('content')
	<div class="py-5 bg-secondary">
		<div class="container">
			<a href="/posts" class="btn btn-info">Go back</a>
			
			<img src="/storage/cover_images/{{ $post -> cover_image }}" alt="Cover image" class="my-5" width="100%">

			<h1>{{ $post -> title }}</h1>
			<small>Written on {{ $post -> created_at }}</small>
			<p>{!! $post -> body !!}</p>

			<a href="/posts/{{ $post -> id }}/edit" class="btn btn-light">Edit</a>

			{!! Form::open(['action' => ['PostsController@destroy', $post -> id], 'method' => 'POST', 'class' => 'float-right']) !!}
				{{ Form::hidden('_method', 'DELETE') }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection