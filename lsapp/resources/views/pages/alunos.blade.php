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

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif


  @if($message = Session::get('sucess'))
    <div class="alert alert-sucess alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong> {{ $message }} </strong>
    </div>
  @endif
  <form method="post" action="{{ url('sendemail/send') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
      <label>Enter Your E-mail</label>
      <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
      <label>Enter Your Message</label>
      <textarea type="text" name="message" class="form-control">
      </textarea>
    </div>

    <div class="form-group">
      <input type="submit" name="send" value="Send" class="btn btn-info">
    </div>
  </form>

</div>
@endsection