@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Criar Postagem</a>
                    <div class="col-md-12" style="padding: 30px;">
                    <h3>Suas postagens de notícias</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Título</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit">Editar</a></td>
                                <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Deletar postagem',['class' => 'btn btn-danger'])}}
                                {!!Form::close() !!}
                            @endforeach
                            {{$posts->links()}}
                            @else
                            <p>you have no posts</p>
                            @endif
                            </td>
                            </tr>
                        </table>
                    </div>
                </div>
<hr>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/pdfs/create" class="btn btn-primary">Cadastrar novo PDF</a>

                    <div style="padding-top: 30px;">
                    <h3>Seus PDF's</h3>
                    @if(count($pdfs) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($pdfs as $pdf)
                            <tr>
                            <div class="btn-group">
                            <a class="btn btn-primary" href="{{ url('storage/files/'.$pdf->filename) }}" target="_blank">{{$pdf->filename}}</a>
                                {!!Form::open(['action' => ['PdfsController@destroy', $pdf->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Deletar',['class' => 'btn btn-danger'])}}
                                {!!Form::close() !!}
                            </div>
                                <td>
                            @endforeach
                              {{$posts->links()}}
                            @else
                            <p>you have no pdfs</p>
                            @endif
                            </td>
                            </tr>
                        </table>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection