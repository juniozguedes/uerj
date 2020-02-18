@extends('layouts.app')
@section('content')
<div class="container">
	<h1>Capes</h1>
</div>

<div class="container" style="text-align: center;">
  <div class="row">
    <div class="col-md-12">
@if(count($posts) > 0)
      @foreach($posts as $post)
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
    <p>Não há postagens</p>
  @endif
  </div>
  </div>
</div>


@endsection