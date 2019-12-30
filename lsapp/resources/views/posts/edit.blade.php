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
	<p style="font-weight:bold;">Selecione abaixo a página em que a postagem será realizada.</p>
		 	{{Form::select('tag', array('' => 'Notícias','revista' => 'Revista','doutorado' => 'Doutorado','editais' => 'Editais','alunos' => 'Alunos', 'formularios' => 'Formulários'), 'S')}}
		<!--{{Form::text('tag','',['class'=>'form-control', 'placeholder' => 'Tag para a postagem'])}}-->
	</div>

	</div>
	{{Form::hidden('_method', 'PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}

	<h1>Outros idiomas:</h1>
	<p>Inglês:</p>
	<div class="form-group">
		{{Form::text('titleeng','',['class'=>'form-control', 'placeholder' => 'Título em Inglês'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('bodyeng', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo em Inglês'])}}
	</div>

	<p>Espanhol:</p>
	<div class="form-group">
		{{Form::text('titleesp','',['class'=>'form-control', 'placeholder' => 'Título em Espanhol'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('bodyesp', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo em Espanhol'])}}
	</div>
{!! Form::close() !!}
@endsection    