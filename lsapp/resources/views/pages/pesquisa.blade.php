@extends('layouts.app')
@section('content')    
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/IMG-20190126-WA0053.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{__('Linhas de Pesquisa')}}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">{{__('Home')}} <i class="ion-ios-arrow-forward"></i></a></span> <span>{{__('Linhas de Pesquisa')}} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

 <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/rj_bg.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
              <div class="col-md-12 heading-section heading-section-white ftco-animate pl-lg-12 pt-md-0 pt-12">
                <p>{{__('A pesquisa e disciplinas opcionais do curso se distribuem em  três linhas: 1) Trabalho, Relações Sociais e Serviço Social ; 2) Questão Social, Políticas Públicas e Serviço Social; 3) Identidades, Cultura, Políticas Públicas e Serviço Social. Elas objetivam investigar, construir conhecimento e elaborar proposições de políticas nas temáticas.')}}</p>
                <h2 class="mb-4">{{__('1.  Trabalho, Relações Sociais e Serviço Social')}}</h2>
                <p><u>{{__('1.1 Serviço Social e Formação Profissional')}}</u></p>

<p>{{__('O processo de formação acadêmico-profissional do Assistente Social. Abordagens históricas.')}}</p>

 

<p><u>{{__('1.2 Fundamentos históricos, teórico-metodológicos e ético-políticos do Serviço Social')}}</u></p>

<p>{{__('Fundamentos históricos e trabalho profissional. Dimensões teórico-metodológicas, técnico-operativas e ético-políticas do Serviço Social na contemporaneidade.')}}</p>

 

<p><u>{{__('1.3 Serviço Social no contexto internacional, com ênfase na América Latina')}}</u></p>

<p>{{__('Estudos pertinentes ao Serviço Social com base no reconhecimento das profundas alterações que estão acontecendo na América Latina e no mundo. Busca promover e aprofundar intercâmbios, convênios e parcerias no âmbito da América Latina e demais países com desenvolvimento expressivo do Serviço Social.')}}</p>

 

<p><u>{{__('1.4 Reconstrução histórica em trabalho e educação')}}</u></p>

<p>{{__('Fundamentos teórico-metodológicos da pesquisa social. Relações de trabalho e formação de trabalhadores. História do trabalho e da educação. Políticas educacionais e sistemas de ensino.')}}</p>

 

<p><u>{{__('1.5 Trabalho, política e território')}}</u></p>

<p>{{__('Formas de Organização e Sentidos do Trabalho na Produção Capitalista.Trabalho, Política e Lutas Sociais. Desenvolvimento, Território e Política.Cidade, Política Urbana e Lutas Sociais.Trabalho, Cultura e Modos de Vida.Trabalho, Sociabilidade e Serviço Social.')}}</p>

 

<p><u>{{__('1.6. Trabalho, direitos, políticas e Serviço Social')}}</u></p>

<p>{{__('Trabalho e trabalho nos serviços. Processos, condições, políticas e direitos do trabalhador. Organização e lutas dos trabalhadores. Ética, ética profissional e política. Saúde do trabalhador e meio ambiente. O Serviço Social nos programas e processos de trabalho com os trabalhadores. Os assistentes sociais como trabalhadores')}}</p>
<h2 class="mb-4">
{{__('2. Questão Social, Políticas Públicas e Serviço Social')}}</h2>
<p><u>{{__('2.1 Política Social e Serviço Social')}}</u></p>

<p>{{__('Abordagens acerca da questão social. O debate da política social. Financiamento, controle, participação e gestão democrática. Políticas setoriais. Relação histórica entre política social, luta de classes e Serviço Social no Brasil e demais países da América Latina.')}}</p>

 

<p><u>{{__('ei')}}</u></p>

<p>{{__('Seguridade Social, Serviço Social e saúde. Financiamento, controle, participação e gestão democrática da saúde. Relação entre sujeitos políticos, lutas sociais e saúde.')}}</p>

 

 <p><u>{{__('2.2 Violência, Direitos Humanos e Políticas Sociais')}}</u></p>

<p>{{__('Agravamento do fenômeno da violência como expressão da questão social; Direitos Humanos no contexto da contradição da sociedade de classes; defasagem entre os pressupostos universais e a sua objetivação prática; Motivações éticas às ações políticas. Implicações e relações com o Serviço Social.')}}</p>

 

 <p><u>{{__('2.3 Infância e Adolescência, Juventude e Família')}}</u></p>

<p>{{__('Infância, adolescência,  juventude e família; articulação interinstitucional e produção de subsídios para as políticas sociais no Rio de Janeiro; participação e controle democrático Implicações e relações com o Serviço Social.')}}</p>

 

 <p><u>{{__('2.4 Estudos de América Latina e Caribe')}}</u></p>

 <p>{{__('Realidade sócio-cultural, econômica e política dos países latino-americanos; Conflitos Sociais, Processos Políticos e implicações para o Serviço Social.')}}</p>

 

 <p><u>{{__('2.5 Classes Sociais, Movimentos Sociais e Serviço Social')}}</u></p>

 <p>{{__('Estado, sociedade civil e sujeitos políticos; mundialização e crise do capital. Movimentos Sociais no século XXI e suas implicações e relações com o Serviço Social.')}}</p>

 <h2 class="mb-4">
{{__('3  Identidades, Cultura, Políticas Públicas e Serviço Social')}}</h2>
<p><u>{{__('3.1. Direitos Humanos, relações de gênero, geração, raça  e etnia')}}</u></p>

<p>{{__('Produção de desigualdades, incluindo classe social, geração, gênero, raça/etnia, religião e orientação sexual, bem como nas diferentes formas de violência e suas implicações para o Serviço Social; direitos sexuais e reprodutivos na contemporaneidade.')}}</p>

 

<p><u>{{__('3.2. Formação de identidades no espaço educacional, nos espaços sócio-ocupacionais e das profissões.')}}</u></p>

<p>{{__('O espaço educacional e sua interface com diferentes determinações como a da questão étnico-racial; a da educação sexista e discriminatória diante das diferentes expressões da sexualidade. Expressões contemporâneas da divisão sexual e étnico-racial do trabalho.')}}</p>

 

<p><u> {{__('3.3. Relações de gênero, étnico/raciais, sexualidades e políticas públicas')}}</u></p>

<p>{{__('Políticas e programas sociais relacionadas a gênero, às relações étnico-raciais e à sexualidade; políticas afirmativas e acesso de sujeitos não-identificados como masculinos ou femininos às políticas sociais; políticas sociais e biopolítica.')}}</p>

 

<p><u>{{__('3.4. O impacto da cultura nas sociedades contemporâneas')}}</u></p>

<p>{{__('As diferentes abordagens da cultura na sociedade contemporânea: interface com o poder e reprodução de desigualdades; o espaço cultural como resistência e expressão da autonomia; o papel da mídia; experiências com projetos culturais na prática dos assistentes sociais.')}}</p>

 

<p><u>{{__('3.5. Gênero, Família e Desigualdades Sociais')}}</u></p>

<p>{{__('A relação entre estudos feministas/de gênero e estudos de família. Gênero, vulnerabilidade e desigualdade social. Intersecção das desigualdades de gênero, sexuais, étnico-raciais, de idade e geração nos estudos de família. Família, políticas públicas e Serviço Social')}}</p>

 

<p><u>{{__('3.6. Cultura, Infância e Relações Geracionais e de Gênero')}}</u></p>

<p>{{__('Relações inter e intrageracionais e produção de cuidado. Violência, gênero e infância. Modelos sociais, culturais e institucionais de proteção à infância. Trajetórias biográficas e narrativas sobre a infância.  Aspectos sociais e culturais na produção da infância.')}}</p>



          <p><a href="/" class="btn btn-primary px-4 py-3 mt-3">{{__('VOLTAR')}}</a></p>

              </div>
          </div>  
        </div>
    </div>
</section>
@endsection