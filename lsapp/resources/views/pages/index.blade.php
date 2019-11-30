@extends('layouts.app')

@section('content')


<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/manual.jpg); width: 100%; height: 60%;">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">{{__('Inscrições abertas!')}}</h1>
            <p>{{__('Alunos externos poderão se inscrever para disciplinas 2019.2')}}</p>
            <p><a href="#section-counter" class="btn btn-primary px-4 py-3 mt-3">{{__('Saiba mais')}}</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/rodrigorezendefotografo-ensaio-prewedding-riodejaneiro-ufrj-fotos-noivas-rodrigorezende-paula-bruno0010.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">{{__('Informações PPGS')}}</h1>
            <p>{{__('Conheça o projeto.')}}</p>
            <p><a href="#apresenta" class="btn btn-primary px-4 py-3 mt-3">{{__('Saiba mais')}}</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

     <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/rj_bg.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
          		<div class="col-md-12 heading-section heading-section-white ftco-animate pl-lg-12 pt-md-0 pt-12">
            		<h2 class="mb-4">INSCRIÇÕES ABERTAS em disciplinas em 2019/2 para ALUNOS EXTERNOS</h2>
            		<p>Será realizada no período de 16 a 26/07/2019, das 14h às 18h, na Secretaria do PPGSS, sendo necessária a apresentação de declaração atual de matrícula em curso de Mestrado ou Doutorado de outra instituição em 2019/2 e cópia da sua carteira de identidade (RG) .
Serão oferecidas 2 (duas) disciplinas, a saber: </p>

					<p>FSS02704 - Tópicos Especiais em Processo de Trabalho do SESO - Questão Social e Trabalho na Crise do Capital - Profa. Dra. Rosangela Nair de Carvalho Barbosa <a href="http://www.ppgservicosocial.uerj.br/Topicos_Especiais_em_Processo_do_Trabalho-Profa_Rosangela_Barbosa.pdf" target="blank">Clique aqui para a ementa</a></p>

					<p>FSS02901 - Tópicos Especiais em Teoria Social I: Metodologia de Pesquisa Qualitativa - Profa. Dra. Ana Inês Simões C. Melo <a href="http://www.ppgservicosocial.uerj.br/Topicos_Especiais_em_Teoria_Social_I-Profa_Ana_Ines.pdf" target="blank">Clique aqui para a ementa</a></p>

					<p>QUADRO DE HORÁRIOS 2019-2 <a href="http://www.ppgservicosocial.uerj.br/QUADRO_DE_HORARIOS_PARA_2019 -2.pdf" target="blank">Clique aqui para PDF dos Horários</a>;.</p>

					<p><a href="/" class="btn btn-primary px-4 py-3 mt-3">VOLTAR</a></p>

          		</div>
        	</div>	
        </div>
    </div>
    </section>
    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Notícias</span></h2>
            <p>Confira abaixo</p>
          </div>
        </div>
				<div class="row">

        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="col-md-4 col-lg-4 col-sm-12">
          <div class="text bg-white p-4">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <div class="d-flex align-items-center mt-4">
				@if ($post->filename = 'None')
				<p><a href="/posts/{{$post->id}}" class="btn btn-primary px-4 py-3 mt-3" target="_blank">Download do arquivo</a></p>
				@else
              <p><a href="{{ url('storage/files/'.$post->filename) }}" class="btn btn-primary px-4 py-3 mt-3" target="_blank">Download do arquivo</a></p>
			    @endif 
              <img src="{{ url('storage/files/'.$post->filename) }}" alt="" title="" />         
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p>Não há postagens</p>
        @endif

            <p><a style="background-color: black;" href="/" class="btn btn-primary px-4 py-3 mt-3">Início</a></p>

		</section>
         <section class="ftco-section ftco-counter img apresenta" id="section-counter" style="background-image: url(images/rj_bg.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container" id="apresenta">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
          		<div class="col-md-12 heading-section heading-section-white ftco-animate pl-lg-12 pt-md-0 pt-12">
            <h2 class="mb-4">{{__('Apresentação')}}</h2>
            <p>{{__('Criado no ultimo ano da última década do século XX, ou seja, em 1999, o PPGSS/UERJ elege como áreas de concentração temas significativos e relevantes para o país e o Estado do Rio de Janeiro: trabalho e política social. O objetivo central do Programa de Pós-Graduação em Serviço Social da Universidade do Estado do Rio de Janeiro (PPGSS/UERJ) é o de formar pesquisadores de alto nível, em Serviço Social e áreas afins, qualificados para o ensino superior, para a produção e difusão de conhecimentos sobre as questões afetas ao trabalho, as políticas sociais e Serviço Social na América Latina, com ênfase no Brasil e para a intervenção qualificada no âmbito das políticas sociais')}}.</p>
        	<p>{{__('Os objetivos do Programa e o tempo de existência dos cursos – o Mestrado completou quatorze anos e o Doutorado, 9 anos, em 2013 - e o elevado índice de produções acadêmicas do corpo docente, atestado, sobretudo pelo processo de avaliação de livros da área (Qualis Livros), faz com que hoje o PPGSS/UERJ possua uma inserção nacional – inclusive desenvolvendo um DINTER coma UFAL a partir de 2013 - e regional já consolidada que se expressa na evolução de seu processo seletivo, na demanda de participação de alunos externos e na intensificação da procura pelo pós-doutoramento nos últimos anos. O PPGSS teve seu conceito, atribuído pela CAPES, elevado para 6 (seis), em 2013. Está em curso um processo de internacionalização do PPGSS, especialmente com a atração de estudantes dos países africanos de língua portuguesa e europeus, o que esperamos consolidar nos anos vindouros')}}.</p>

        						<p><a href="/" class="btn btn-primary px-4 py-3 mt-3">{{__('VOLTAR')}}</a></p>

          		</div>
          		    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>+{{__('Professores')}}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="2000">0</strong>
		                <span>+{{__('Estudantes')}}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>+{{__('Cursos')}}</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        	</div>	
        </div>
    </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style=" height: 300px; width: 300px; ;background-image: url(images/logo.png); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">O que oferecemos</h2>
						<p>Conheça o nosso sistema de ensino.</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<h3>Segurança</h3>
										<p>Estude com segurança em ambientes confortáveis para o aluno.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Aulas constantes</h3>
										<p>Confira a nossa agenda no menu.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<h3>Professores certificados</h3>
										<p>Capacitados e treinados em suas devidas funções.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Infraestrutura</h3>
										<p>Espaços de estudo, salas e cadeiras para todos.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!--
		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Student Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
  -->
<!--
	@if(count($posts) > 0)
    	@foreach($posts as $post)
 			<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
 			<p>{!!$post->body!!}</p>
 			<small>Data: {{$post->created_at}} por {{$post->user['name']}}</small>
 			@if($post->filename !== 'none')
 				NAU FUNFA<p><a href="/storage/app/public/files/{{$post->filename}}">Exibir anexo</a></p>
 				<p><a href="{{ url('storage/files/'.$post->filename) }}" target="_blank">Exibir anexo2</a></p>
 				NAU FUNFA<img src="/storage/app/files/{{$post->filename}}">
				<img src="{{ url('storage/files/'.$post->filename) }}" alt="" title="" /> 				

 			@endif
        @endforeach
        {{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif-->
@endsection
