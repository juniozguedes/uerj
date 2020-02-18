@extends('layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/IMG-20190126-WA0053.jpg')}})">

      
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Programa</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Programa <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Fluxograma</h2>
            <img src="{{asset('images/uerj/fluxograma1.png')}}">
          </div>
        </div>
      </div>
    </section>

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