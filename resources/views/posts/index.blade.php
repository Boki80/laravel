@extends ('layouts.app')

@section ('content')
	<h1>Posts</h1>
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-sm-4">
						<img src="/storage/cover_images/{{ $post -> cover_image }}" alt="Cover image" width="100%">
					</div>
					<div class="col-sm-4">
				<a href="/posts/{{ $post -> id }}"><h3>{{ $post -> title }}</h3></a>
				<small>Written on {{ $post -> created_at }}</small>
						
					</div>
				</div>
			</div>
		@endforeach
		{{ $posts -> links() }}
	@else 
		<p>No posts found.</p>
	@endif
@endsection