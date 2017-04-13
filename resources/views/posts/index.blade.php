@extends('main')

@section('title','All Posts')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1 class="btn-h1">All Posts</h1>
			<a href="{{route('posts.create')}}" class="btn btn-primary btn-h1 pull-right">Create a new post</a>
		</div>
		
	</div>
	<hr>
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<th>{{$post->id}}</th>
						<td>{{$post->title}}</td>
						<td>{{substr($post->body, 0, 50)}}{{(strlen($post->body)>50? "...":"")}}</td>
						<td>{{$post->created_at}}</td>
						<td>
							<a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a>
							<a href="{{route('posts.edit', $post->id)}}" class="btn btn-default btn-sm">Edit</a>
						</td>
					</tr>

				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $posts->links() !!}
		</div>
	</div>

@stop