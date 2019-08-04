@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{{Form::text('title','',['class'=>'form-control', 'placeholder' => 'Título'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo'])}}
	</div>
	<div class="form-group">
		{{Form::file('filename')}}
	</div>
	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
	
@endsection