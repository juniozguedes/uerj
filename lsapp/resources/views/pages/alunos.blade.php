@extends('layouts.app')
@section('content')
<div class="container">
<h1>Informações Alunos</h1>
</div>

<div class="container-fluid">
@if(count($posts) > 0)
      @foreach($posts as $post)
      <hr>
      <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
      <p>{!!$post->body!!}</p>
      <small>Data: {{$post->created_at}} por {{$post->user['name']}}</small>
      @if($post->filename !== 'none')
        <!--<p><a href="/storage/app/public/files/{{$post->filename}}">Exibir anexo</a></p>-->
        <p><a href="{{ url('storage/files/'.$post->filename) }}" target="_blank">Download do arquivo</a></p>
        <!--<img src="/storage/app/files/{{$post->filename}}">-->
        <img src="{{ url('storage/files/'.$post->filename) }}" alt="" title="" />         

      @endif
        @endforeach
  @else
    <p>No posts found</p>
  @endif
</div>
@endsection