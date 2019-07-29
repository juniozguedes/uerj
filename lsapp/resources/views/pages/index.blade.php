@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <p>Index</p>
	@if(count($posts) > 0)
    	@foreach($posts as $post)
 			<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
 			<p>{!!$post->body!!}</p>
 			<small>Data: {{$post->created_at}} por {{$post->user['name']}}</small>
 			@if($post->filename !== 'none')
 				<p><a href="/storage/files/{{$post->filename}}">Exibir anexo</a></p>
 			@endif
        @endforeach
        {{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection
