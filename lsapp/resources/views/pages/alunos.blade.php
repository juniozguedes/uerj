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
        <h2>Dados do Candidato</h2>
        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Nome:</label>
            <input type="text" name="name" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>RG:</label>
            <input type="text" name="rg" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Órgão Emissor</label>
            <input type="text" name="orgao" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Data de emissão:</label>
            <input type="text" name="data_emissao" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>UF da emissão</label>
            <input type="text" name="uf_emissao" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>CPF:</label>
            <input type="text" name="cpf" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Sexo</label>
            <input type="text" name="sexo" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Naturalidade:</label>
            <input type="text" name="naturalidade" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Nacionalidade</label>
            <input type="text" name="nacionalidade" class="form-control">
          </div>
        </div>

        <h2>Dados de Endereço</h2>
        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Endereço:</label>
            <input type="text" name="endereco" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Número</label>
            <input type="text" name="numero" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Bairro:</label>
            <input type="text" name="bairro" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Complemento:</label>
            <input type="text" name="complemento" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Cidade:</label>
            <input type="text" name="cidade" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>UF:</label>
            <input type="text" name="uf" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>País:</label>
            <input type="text" name="pais" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Telefone Celular:</label>
            <input type="text" name="telefone_celular" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Telefone de Trabalho:</label>
            <input type="text" name="telefone_trabalho" class="form-control">
          </div>
        </div>

        <h2>Curso de Graduação</h2>
        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Curso:</label>
            <input type="text" name="curso" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Categoria do IES:</label>
            <input type="text" name="categoria_ies" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Nome do IES:</label>
            <input type="text" name="nome_ies" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Sigla do IES:</label>
            <input type="text" name="sigla_ies" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-4">
            <label>País:</label>
            <input type="text" name="pais_graduacao" class="form-control">
          </div>

          <div class="form-group col-md-4">
            <label>Ano da Titulação:</label>
            <input type="text" name="ano_titulacao" class="form-control">
          </div>

          <div class="form-group col-md-4">
            <label>UF:</label>
            <input type="text" name="uf_graduacao" class="form-control">
          </div>
        </div>

        <h2>Outras Formações</h2>
        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Possui curso de graduação?</label>
            <input type="text" name="possui_curso_graduacao" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Outro Curso de pós graduação:</label>
            <input type="text" name="outro_curso_pos_graduacao" class="form-control">
          </div>
        </div>

        <h2>Curso de Mestrado</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Curso</label>
            <input type="text" name="curso_mestrado" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Nome da IES:</label>
            <input type="text" name="nome_da_ies_mestrado" class="form-control">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Categoria da IES:</label>
            <input type="text" name="categoria_da_ies_mestrado" class="form-control">
          </div>

          <div class="form-group col-md-4">
            <label>Sigla da IES:</label>
            <input type="text" name="sigla_da_ies_mestrado" class="form-control">
          </div>

          <div class="form-group col-md-4">
            <label>Ano de titulação:</label>
            <input type="text" name="ano_titulacao_mestrado" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>UF:</label>
            <input type="text" name="uf_mestrado" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>País:</label>
            <input type="text" name="pais_mestrado" class="form-control">
          </div>
        </div>
        <h2>Informações Adicionais</h2>
        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>É candidato pelo sistema de cotas?</label>
            <input type="text" name="candidato_sistema_cotas" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Está trabalhando?</label>
            <input type="text" name="trabalhando" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Principal Inserção de Trabalho:</label>
            <input type="text" name="insercao_trabalho" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Possui experiência como docente:</label>
            <input type="text" name="experiencia_docente" class="form-control">
          </div>
        </div>

        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Possui experiência como supervisor:</label>
            <input type="text" name="experiencia_supervisor" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Possui interesse em bolsa?</label>
            <input type="text" name="interesse_bolsa" class="form-control">
          </div>
        </div>

        <div class="form-row">                
          <div class="form-group col-md-6">
            <label>Natureza da Instituição:</label>
            <input type="text" name="natureza_instituicao" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Idiomas:</label>
            <input type="text" name="idiomas" class="form-control">
          </div>
        </div>        

        <div class="form-row">                
          <div class="form-group col-md-6">
            <label>Certificado de Língua Estrangeira:</label>
            <input type="text" name="certificado_lingua_estrangeira" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Solicita Isenção?</label>
            <input type="text" name="solicita_isencao" class="form-control">
          </div>
        </div>

        <div class="form-row">                
          <div class="form-group col-md-12">
            <label>Justificativa para Isenção:</label>
            <input type="text" name="justificativa_isencao" class="form-control">
          </div>
        </div>

        <h2>Exposição de motivos/interesses e disponibilidade:</h2>
        <div class="form-row">        
          <div class="form-group col-md-6">
            <label>Aspectos de interesse no Programa de Pós-Graduação Strictu Sensu:</label>
            <input type="text" name="aspectos_interesse" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Linha de Pesquisa:</label>
            <input type="text" name="linha_pesquisa" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Título e resumo do ante-projeto/projeto:</label>
            <input type="text" name="titulo_resumo_projeto" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <label>Título:</label>
            <input type="text" name="titulo" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <input type="submit" name="send" value="Send" class="btn btn-info">
        </div>
      </form>
</div>
@endsection