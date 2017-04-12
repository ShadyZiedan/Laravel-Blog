@extends('main')

@section('title','Edit Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			{!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT']) !!}
			
			{{Form::label('title','Title:')}}
			{{Form::text('title', null, ['class'=>'form-control input-lg'])}}
			
				
			{{Form::label('body','Post Body:')}}
			{{Form::textarea('body', null, ['class'=>'form-control'])}}
			<hr>
			
		</div>
		<div class="col-md-4 well">
			<p><strong>Created At: </strong><time datetime="{{$post->created_at}}">{{date('j M, Y h:i a', strtotime($post->created_at))}}</time></p>
			<p><strong>Last update: </strong><time datetime="{{$post->updated_at}}">{{date('j M, Y h:i a', strtotime($post->updated_at))}}</time></p>
			<div class="row">
				<div class="col-md-6">
					{{ Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block'))}}
				</div>
				<div class="col-md-6">
					{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}
				</div>
			</div>
			{!! Form:: close() !!}
		</div>
		
	</div>


@stop