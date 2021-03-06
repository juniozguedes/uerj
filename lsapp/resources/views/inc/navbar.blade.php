      @guest

        <div id="language" style="position: fixed;top: 0px;right: 0px;padding: 0.5em 0.7em;background: transparent; display: block; width: 40px; height: auto; z-index: 99;">
  
            <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}" title="English"><img src="http://upload.wikimedia.org/wikipedia/commons/0/07/Icons-flag-uk.png" alt="English" /></a>

            <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'pt') }}" title="Portugues"><img src="{{asset('images/Icons-flag-br.png')}}"></a>
        
        </div>



      <div class="bg-top navbar-light">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center align-items-stretch">
                    <div class="col-md-6 d-flex align-items-center py-6">
                        <a class="navbar-brand" href="{{ url('/') }}">UERJ<span>{{__('Programa de Pós Graduação em Serviço Social Stricto Sensu')}}</span></a>
                    </div>
                    <div id="parceiro" class="col-lg-6 d-block">
                        <div id="parceiro" class="row d-flex">

                            <!--<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <div class="text">
                                    <span>2334-0299</span>
                                </div>
                            </div>-->
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-2">

                                <img id="parceiro" src="{{asset('images/navbar/parceiro1.png')}}" style="height: 50px; width: 50px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-2">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro2.png')}}"/ style="height: 50px; width: 60px;">
                            </div>


                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-2">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro3.png')}}"/ style="height: 40px; width: 40px;">
                            </div>


                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-2">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro4.png')}}"/ style="height: 50px; width: 50px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-2">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro5.png')}}"/ style="height: 50px; width: 90px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-2">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro6.png')}}"/ style="height: 40px; width: 90px;">
                            </div>

                            <!--<div class="col-md topper d-flex align-items-center justify-content-end">
                                <img src="images/logo.png"/ style="height: 100px; width: 100px;">
                            </div>-->
                        </div>


                    </div>
                </div>
            </div>
        </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item  @if ($title == 'home') active @endif" ><a href="{{ url('/') }}" class="
                    nav-link pl-0">Home</a></li>

                    <li class="nav-item @if ($title == 'programa') active @endif"><a href="{{route('programa', app()->getLocale()) }}" class="nav-link">{{__('Programa')}}</a></li>
                    <li class="nav-item @if ($title == 'docente') active @endif"><a href="{{route('docente', app()->getLocale()) }}" class="nav-link">{{__('Corpo Docente')}}</a></li>
                    <li class="nav-item @if ($title == 'pesquisa') active @endif"><a href="{{route('pesquisa', app()->getLocale()) }}" class="nav-link">{{__('Pesquisa')}}</a></li>
                    <li class="nav-item @if ($title == 'alunos') active @endif"><a href="{{route('alunos', app()->getLocale()) }}" class="nav-link">{{__('Informações Alunos')}}</a></li>
                    <li class="nav-item @if ($title == 'formularios') active @endif"><a href="{{route('formularios', app()->getLocale()) }}" class="nav-link">{{__('Formulários')}}</a></li>
                    <li class="nav-item @if ($title == 'bolsas') active @endif"><a href="{{route('bolsas', app()->getLocale()) }}" class="nav-link">{{__('Bolsas')}}</a></li>
                    <li class="nav-item @if ($title == 'editais') active @endif"><a href="{{route('editais', app()->getLocale()) }}" class="nav-link">Editais Seleção</a></li>
                    <li class="nav-item @if ($title == 'doutorado') active @endif"><a href="{{route('doutorado', app()->getLocale()) }}" class="nav-link">Pós Doutorado</a></li>
                    <li class="nav-item @if ($title == 'capes') active @endif"><a href="{{route('capes', app()->getLocale()) }}" class="nav-link">CAPES Print</a></li>
                    <li class="nav-item @if ($title == 'contato') active @endif"><a href="{{route('contato', app()->getLocale()) }}" class="nav-link">{{__('Contato')}}</a></li>
                    <li class="nav-item @if ($title == 'revista') active @endif"><a href="{{route('revista', app()->getLocale()) }}" class="nav-link">Revista</a></li>
                    <li class="nav-item @if ($title == 'noticias') active @endif"><a href="{{ route('postsIndex', app()->getLocale()) }}" class="nav-link">{{__('Notícias')}}</a></li>
                </ul>
            </div>
        </div>
      </nav>
    <!-- END nav -->    

@else

      <div class="bg-top navbar-light">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center align-items-stretch">
                    <div class="col-md-4 d-flex align-items-center py-4">
                        <a class="navbar-brand" href="{{ url('/') }}">UERJ<span>Programa de Pós Graduação em Serviço Social</span></a>
                    </div>
                    <div id="parceiro" class="col-lg-8 d-block">
                        <div id="parceiro" class="row d-flex">

                            <!--<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <div class="text">
                                    <span>2334-0299</span>
                                </div>
                            </div>-->

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro1.png')}}"/ style="height: 50px; width: 50px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro2.png')}}"/ style="height: 50px; width: 60px;">
                            </div>


                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro3.png')}}"/ style="height: 40px; width: 40px;">
                            </div>


                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro4.png')}}"/ style="height: 50px; width: 50px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro5.png')}}"/ style="height: 50px; width: 90px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro6.png')}}"/ style="height: 40px; width: 90px;">
                            </div>

                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <img id="parceiro" src="{{asset('images/navbar/parceiro7.png')}}"/ style="height: 40px; width: 80px;">
                            </div>



                            <!--<div class="col-md topper d-flex align-items-center justify-content-end">
                                <img src="images/logo.png"/ style="height: 100px; width: 100px;">
                            </div>-->
                        </div>


                    </div>
                </div>
            </div>
        </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item  @if ($title == 'home') active @endif" ><a href="{{ url('/') }}" class="
                    nav-link pl-0">Home</a></li>
                    <li class="nav-item @if ($title == 'programa') active @endif"><a href="{{route('programa', app()->getLocale()) }}" class="nav-link">{{__('Programa')}}</a></li>
                    <li class="nav-item @if ($title == 'docente') active @endif"><a href="{{route('docente', app()->getLocale()) }}" class="nav-link">{{__('Corpo Docente')}}</a></li>
                    <li class="nav-item @if ($title == 'pesquisa') active @endif"><a href="{{route('pesquisa', app()->getLocale()) }}" class="nav-link">{{__('Pesquisa')}}</a></li>
                    <li class="nav-item @if ($title == 'alunos') active @endif"><a href="{{route('alunos', app()->getLocale()) }}" class="nav-link">{{__('Informações Alunos')}}</a></li>
                    <li class="nav-item @if ($title == 'formularios') active @endif"><a href="{{route('formularios', app()->getLocale()) }}" class="nav-link">{{__('Formulários')}}</a></li>
                    <li class="nav-item @if ($title == 'bolsas') active @endif"><a href="{{route('bolsas', app()->getLocale()) }}" class="nav-link">{{__('Bolsas')}}</a></li>
                    <li class="nav-item @if ($title == 'editais') active @endif"><a href="{{route('editais', app()->getLocale()) }}" class="nav-link">Editais Seleção</a></li>
                    <li class="nav-item @if ($title == 'doutorado') active @endif"><a href="{{route('doutorado', app()->getLocale()) }}" class="nav-link">Pós Doutorado</a></li>
                    <li class="nav-item @if ($title == 'capes') active @endif"><a href="{{route('capes', app()->getLocale()) }}" class="nav-link">CAPES Print</a></li>
                    <li class="nav-item @if ($title == 'contato') active @endif"><a href="{{route('contato', app()->getLocale()) }}" class="nav-link">{{__('Contato')}}</a></li>
                    <li class="nav-item @if ($title == 'revista') active @endif"><a href="{{route('revista', app()->getLocale()) }}" class="nav-link">Revista</a></li>
                    <li class="nav-item @if ($title == 'noticias') active @endif"><a href="{{ route('postsIndex', app()->getLocale()) }}" class="nav-link">{{__('Notícias')}}</a></li>
                </ul>
            </div>
        </div>
      </nav>

      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Administrativo
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav"><a href="/" class="nav-link pl-0">Home</a></li>
                        <li class="nav-item"><a href="/posts" class="nav-link">Notícias</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register', app()->getLocale()) }}">{{ __('Registrar') }}</a>
                            </li>
                        @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('dashboard', app()->getLocale()) }}">
                                        Painel Administrativo
                                    </a>

                                    <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endguest
