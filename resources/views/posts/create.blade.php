@extends('main')

@section('title','New Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create a new post</h1>
		<hr>
		{!! Form::open(['route' => 'posts.store', 'id' => 'form']) !!}

			{{Form::label('title','Title:')}}
			{{Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' =>'255'])}}
			{{Form::label('body','Post:')}}
			{{Form::textarea('body', null, ['class' => 'form-control', 'required' => ''])}}
			{{Form::submit('Post',['class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top:10px'])}}
		{!! Form::close() !!}
	</div>
</div>

@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	<script>
		$('#form').parsley();
	</script>
@endsection