@extends('layouts.app')

@section('content')
	<a href="/" class="btn btn-default">Go back</a>


	<h3><a href="{{route('posts.show', ['post' => $post->id])}}">{{$post->title}}</a></h3>
 	<p>{!!$post->body!!}</p><!-- Por causa do CKEDITOR -->		
	<hr>
	<small>Data: {{$post->created_at}} por {{$post->user['name']}}</small>
 	<hr>
 	@if($post->user_id == $uid)
		<a href="/posts/{{$post->id}}/edit">Editar</a>
 		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
 			{{Form::hidden('_method','DELETE')}}
 			{{Form::submit('Delete',['class' => 'btn btn-danger'])}}
 		{!!Form::close() !!}
 	@endif
@endsection