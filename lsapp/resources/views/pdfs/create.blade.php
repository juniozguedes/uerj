@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'PdfsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		<p>Anexe um único PDF abaixo:</p>
		{{Form::file('filename')}}
	</div>
	{{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
	
@endsection