@extends('layouts.app')
@section('content')
  <h1>Formulários</h1>
 @if(count($posts) > 0)
<div class="accordion" id="accordionExample">
   @for ($i = 0; $i < count($posts); $i++)

  <div class="card">
    <div class="card-header" id="heading{{$i}}">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">
          {{$posts[$i]->title}}
        </button>
      </h5>
    </div>
    <div id="collapse{{$i}}" class="collapse" aria-labelledby="heading{{$i}}" data-parent="#accordionExample">
      <div class="card-body">
        {!!$posts[$i]->body!!}
      </div>
    </div>
  </div>        @endfor
</div>
  @else
    <p>No posts found</p>
  @endif
@endsection

