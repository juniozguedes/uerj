@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
    	@foreach($posts as $post)
 			<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
 			<p>{!!$post->body!!}</p>
 			<small>Data: {{$post->created_at}} por {{$post->user['name']}}</small>
        @endforeach
        {{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection