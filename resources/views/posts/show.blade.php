@extends('main')

@section('title', 'View Post')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h2>{{$post->title}}</h2>
			<hr>
			<p class="lead">{{$post->body}}</p>
			<hr>
		</div>
		<div class="col-md-4 well">
			<p><strong>Created At: </strong><time datetime="{{$post->created_at}}">{{date('j M, Y h:i a', strtotime($post->created_at))}}</time></p>
			<p><strong>Last update: </strong><time datetime="{{$post->updated_at}}">{{date('j M, Y h:i a', strtotime($post->updated_at))}}</time></p>
			<div class="row">
				<div class="col-md-6">
					{{ Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block'))}}
				</div>
				<div class="col-md-6">
					{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE'])!!}
					{{Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])}}
					{!! Form::close()!!}
				</div>
			</div>
			
		</div>
		</div>
	</div>
	
@endsection