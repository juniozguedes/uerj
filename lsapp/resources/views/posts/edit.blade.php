@extends('layouts.app')
@section('content')
<h1>Editar Postagem</h1>
{!! Form::open(array('action'=> ['PostsController@update', $post->id], 'method' => 'POST'))!!}
	<div class="form-group">
		{{Form::label('title','Título')}}
		{{Form::text('title', $post->title,['class'=>'form-control', 'placeholder' => 'Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Corpo')}}
		{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo'])}}
	</div>
	<div class="form-group">
		{{Form::text('tag',$post->tag,['class'=>'form-control', 'placeholder' => 'Tag para a postagem'])}}
	</div>

	</div>
	{{Form::hidden('_method', 'PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection    