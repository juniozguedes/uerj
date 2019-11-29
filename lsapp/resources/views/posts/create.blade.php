@extends('layouts.app')

@section('content')
<div class="container">
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{{Form::text('title','',['class'=>'form-control', 'placeholder' => 'Título'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo'])}}
	</div>
	<div class="form-group">
	<p style="font-weight:bold;">Selecione abaixo a página em que a postagem será realizada. (Deixe em branco para postar como notícia)</p>
		 	{{Form::select('tag', array('' => 'Notícias','revista' => 'Revista','doutorado' => 'Doutorado','editais' => 'Editais','alunos' => 'Alunos', 'formularios' => 'Formulários'), 'S')}}
		<!--{{Form::text('tag','',['class'=>'form-control', 'placeholder' => 'Tag para a postagem'])}}-->
	</div>

	<div class="form-group">
		{{Form::file('filename')}}
	</div>

	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection