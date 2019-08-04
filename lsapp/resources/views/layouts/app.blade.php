<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UERJ - Pós Grad. em Serviço Social PPGS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Styles Laravel -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap template & Custom -->
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">    

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
        @include('inc.navbar')
            @include('inc.messages')
            @yield('content')
                <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 col-lg-4">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Dúvidas?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Rua São Francisco Xavier, 524, bl. D, sl 9002 - Pavilhão João Lyra Filho - Maracanã, Rio de Janeiro/RJ, CEP 20550-013 RJ</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">( 55) (21) 2334-0299 - Ramais : 228 Secretaria / 217 Coordenação </span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">fss.capes@gmail.com </span></a></li>
                    <p>Atendimento: 3ª a 6ª feira, das 14h às 19h</p>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Notícias</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Programa</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Corpo Docente</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Linhas de Pesquisa</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Seleção</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Aluno</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Estágio Docente</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Formulários</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Bolsas</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contato</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2 mb-0">Conecte-se conosco</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
                                                    <p><a href="/" class="btn btn-primary px-4 py-3 mt-3">VOLTAR</a></p>

        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
              <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
</body>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>

  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>

  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</html>
