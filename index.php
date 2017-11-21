<?php
// Inicializa a sessão.
// Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
session_start();

// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Estamos Juntas!</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Satisfy:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dancing Script:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <script src="js/jquery.min.js"></script>
        <script src="js/carrousselSlider.js"></script>
    </head>

    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Estamos Juntas!</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">Sobre o Projeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#testeRelacionaento">Teste seu Relacionamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">Denuncie</a>
                        </li>            
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading">Estamos Juntas! </div>

                    <a class="btn btn-xl js-scroll-trigger" href="#services">Ver mais</a>
                </div>
            </div>
        </header>

        <!-- Services -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Vamos falar sobre Violência contra a mulher?</h2>
                        <h4>
                            A violência praticada contra a mulher, constitui-se em uma das principais formas de 
                            violação de seus direitos, atingindo o direito à vida, à saúde e à integridade física                        
                            e é um problema público, que em todas suas formas, 
                            atinge mulheres de diferentes classes sociais, escolaridades, regiões ou etnias.                           
                        </h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1 class="service-heading">147.691</h1>
                        <p class="text-muted">	
                            Foi o número de registros anual de internações de mulheres vítimas de violência no Brasil. 
                        </p>
                        <p class="text-muted">Fonte: Mapa da Violência, 2015.

                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1 class="service-heading">405</h1>
                        <p class="text-muted">
                            É o número de registros de internações de mulheres vítimas de violência por dia no Brasil. 
                        </p>
                        <p class="text-muted">Fonte: Mapa da Violência, 2015.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1 class="service-heading">3</h1>
                        <p class="text-muted">É a quantidade de feminicídios diários registrados no Brasil. 
                        </p>
                        <p class="text-muted">Fonte: Mapa da Violência, 2015.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>
                            A violência praticada contra a mulher, constitui-se em uma das principais formas de 
                            violação de seus direitos, atingindo o direito à vida, à saúde e à integridade física                        
                            e é um problema público, que em todas suas formas, 
                            atinge mulheres de diferentes classes sociais, escolaridades, regiões ou etnias.                           
                        </h4>
                    </div>
                </div>


            </div>
        </section>
        <!---- Imagem !---->
        <section id="pic1">

        </section>

        <section id = "testeRelacionaento"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Teste seu Relacionamento</h2>
                        <h3 class="section-subheading text-muted">Verifique se vocês está em um Relacionamento Abusivo</h3>

                    </div>
                </div>          
                <div class="col-lg-12 text-center">

                    <h3 id="title" class="w3-center">Perguntas Iniciais</h3>
                    <div class="w3-content w3-display-container">
                        <form action="php/IniciaSessao.php" method="post" id="start">
                            <div  class="mySlides">
                                <h3>Você têm filhos?</h3>
                                <div>
                                    <input type="radio" name="filhos" id="question-1-answers" value="0" checked />
                                    <label for="question-1-answers-B" class="fwrd labelb">Não</label>
                                </div>  
                                <div>
                                    <input type="radio" name="filhos" id="question-1-answers" value="1" />
                                    <label for="question-1-answers-A" class="fwrd labela">Sim</label>
                                </div>
                            </div>
                            <div  class="mySlides">
                                <h3>Você estuda?</h3>
                                <div>
                                    <input type="radio" name="estuda" id="question-2-answers" value="0" checked />
                                    <label for="question-1-answers-B" class="fwrd labelb">Não</label>
                                </div>   
                                <div>
                                    <input type="radio" name="estuda" id="question-2-answers" value="1" />
                                    <label for="question-1-answers-A" class="fwrd labela">Sim</label>
                                </div>
                            </div>
                            <div  class="mySlides">
                                <h3>Você trabalha?</h3> 
                                <div>
                                    <input type="radio" name="trabalha" id="question-1-answers" value="0" checked/>
                                    <label for="question-1-answers-B" class="fwrd labelb">Não</label>
                                </div>  
                                <div>
                                    <input type="radio" name="trabalha" id="question-1-answers" value="1" />
                                    <label for="question-1-answers-A" class="fwrd labela">Sim</label>
                                </div>
                            </div>
                            <div  class="mySlides">
                                <h3>Você esta em um relacionamento:</h3>
                                <div>
                                    <input type="radio" name="tpRelac" id="question-1-answers" value="0" checked/>
                                    <label for="question-1-answers-B" class="fwrd labelb">Heteroafetivo</label>
                                </div>    
                                <div>
                                    <input type="radio" name="tpRelac" id="question-1-answers" value="1" />
                                    <label for="question-1-answers-A" class="fwrd labela">Homoafetivo</label>
                                </div>
                            </div>
                            <input id="teste" type="submit" id="submit" class="btn btn-primary index-btn" value="Teste seu Relacionamento" />
                        </form>
                    </div>
                    <div id ='btnnext'>
                        <button id ='btnnext' class="btn btn-primary index-btn"  onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>


                <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                        showDivs(slideIndex += n);
                    }

                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        if (n < x.length) {
                            document.getElementById('teste').style.visibility = 'hidden';
                        }
                        if (n > x.length) {
                            hide();
                            show();
                        }
                        if (n < 1) {
                            slideIndex = x.length
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        x[slideIndex - 1].style.display = "block";
                    }
                    function hide() {
                        document.getElementById('btnnext').style.visibility = 'hidden';
                        document.getElementById('title').style.visibility = 'hidden';
                    }

                    function show() {
                        document.getElementById('teste').style.visibility = 'visible';
                    }


                </script>

            </div>  
        </div>

    </section>
    <!--        IMAGEM              -->
    <section id="pic2">

    </section>

    <!--        DENUNCIE              -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Denuncie!</h2>
                    <h3 class="section-subheading text-muted"> Leis, projetos e iniciativas para o enfrentamento da violência contra a mulher.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/projetos/iconMariaPenha.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lei 11.340/06</h4>
                        <p class="text-muted">Lei Maria da Penha</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/projetos/iconCompromissoAtitude.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Compromisso e Atitude</h4>
                        <p class="text-muted">Campanha Compromisso e Atitude pela Lei Maria da Penha</p>
                    </div>
                </div><div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/projetos/iconFeminicidio.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lei 13.104/15</h4>
                        <p class="text-muted">Lei do Feminicídio</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/projetos/iconSPM.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>SPM</h4>
                        <p class="text-muted">Secretaria Especial de Políticas Públicas para as Mulheres</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#denuncie1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/projetos/icon180.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Disque 180</h4>
                        <p class="text-muted">Canal direto de orientação sobre direitos e serviços públicos para a população feminina em todo o país. </p>
                    </div>
                </div>           

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/projetos/iconMapa.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mapa da Justiça</h4>
                        <p class="text-muted">Atlas de endereços completos dos órgãos que trabalham para garantir seus direitos</p>
                    </div>
                </div>
            </div>     

        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contate-nos</h2>
                    <h3 class="section-subheading">Entre em contato conosco e nos diga o que achou da aplicação! </h3> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Seu Nome *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Seu Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Seu Telefone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Sua Menssage *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-xl" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div>
                    <span class="copyright"> Trabalho de Conclusão do Curso de Sistemas de Informação </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal 1  Lei Maria da Penha-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Lei 11.340/2006</h2>
                                <p class="item-intro"> 
                                </p>
                                <img class="img-fluid d-block mx-auto" src="img/projetos/iconMariaPenha.png" alt="">
                                <p>
                                    O caso Maria da Penha permitiu, de forma emblemática, romper com a invisibilidade 
                                    que acoberta este grave padrão de violência de que são vítimas tantas mulheres.
                                    Sancionada em 2006, A lei 11.340 recebeu a denominação de Lei Maria da Penha como uma reparação simbólica 
                                    em homenagem à cearense Maria da Penha Fernandes que em 1983, havia sofrido 
                                    tentativa de assassinato, por parte de seu marido, que culminaram por deixá-la
                                    paraplégica aos 38 anos.                                       
                                </p>   
                                <p>	
                                    A Lei Maria da Penha cria mecanismos para coibir a violência doméstica e familiar contra a mulher e 
                                    dispõe sobre a criação dos Juizados de Violência Doméstica e Familiar contra a Mulher;
                                    altera o Código de Processo Penal, o Código Penal e a Lei de Execução Penal;
                                    e tipifica as formas de violência doméstica e familiar contra a mulher.
                                </p> 

                                <a href="http://www.planalto.gov.br/ccivil_03/_ato2004-2006/2006/lei/l11340.htm" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Lei Integral
                                    </button> </a>

                                <button class="btn btn-primary" data-dismiss="modal" type="button"> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 Compromisso e Atitude -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Compromisso e Atitude</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-fluid d-block mx-auto" src="img/projetos/iconCompromissoAtitude.png" alt="">
                                <p>
                                    A Campanha Compromisso e Atitude pela Lei Maria da Penha é resultado da cooperação 
                                    entre o Poder Judiciário, o Ministério Público, a Defensoria Pública e o Governo 
                                    Federal, por meio da Secretaria de Políticas para as Mulheres da Presidência da
                                    República e o Ministério da Justiça. Tem como objetivo unir e fortalecer os 
                                    esforços nos âmbito municipal, estadual e federal para dar celeridade aos julgamentos
                                    dos casos de violência contra as mulheres e garantir a correta aplicação da Lei Maria da Penha.
                                </p>
                                <p>
                                    Compromisso e Atitude é uma ação de cidadania que busca compromisso e atitude em relação à Lei Maria da Penha,
                                    a fim de alterar os comportamentos de violência contra as mulheres e responsabilizar os agressores.                             
                                </p>

                                <a href="http://www.compromissoeatitude.org.br/" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Campanha
                                    </button> </a>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Lei 13.104/15</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                <p>

                                    Em março de 2015 por pressão de movimentos de mulheres e seguindo as recomendações
                                    da Comissão Parlamentar Mista de Inquérito sobre Violência Contra a Mulher (CPMIVCM),
                                    foi sancionada a Lei nº 13.104/15, que altera o Código Penal Brasileiro,
                                    passando a prever o feminicídio como uma das circunstâncias qualificadoras
                                    do homicídio e inclui o feminicídio como crime hediondo, previsto no artigo 1º da
                                    Lei nº 8.072, de 25 de julho de 1990.

                                </p>
                                <p>
                                    A lei do feminicídio, trata-se de estratégia política para nomear e qualificar
                                    essas mortes como problema social resultante da desigualdade estrutural entre 
                                    homens e mulheres, rejeitando seu tratamento como eventos isolados, ou crimes 
                                    passionais inscritos na vida privada dos casais, ou provocados por comportamentos
                                    patológicos. A intenção desta tipificação é tirar este crime da 
                                    invisibilidade, pois embora seja um crime existente caía na generalidade do campo
                                    do homicídio, para ter um campo específico no boletim de ocorrência. A opção pelo
                                    termo feminicídio, também  reforça a responsabilidade da sociedade e do Estado no
                                    cumprimento de suas obrigações na proteção das mulheres e na promoção de seus direitos
                                </p>

                                <!-- <ul class="list-inline">
                                   <li>Date: January 2017</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul> -->
                                <a href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2015/lei/L13104.htm" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Lei
                                    </button> </a>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 Secretaria Especial de Políticas para as Mulheres -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Secretaria de Políticas para as Mulheres</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                                <p>

                                    A Secretaria Especial de Políticas para as Mulheres (SEPM) tem como principal 
                                    objetivo promover a igualdade entre homens e mulheres e combater todas as formas
                                    de preconceito e discriminação herdadas de uma sociedade patriarcal e excludente.
                                    Desde a sua criação em 2003, pelo então Presidente Lula, a SEPM vem lutando para 
                                    a construção de um Brasil mais justo, igualitário e democrático, por meio da valorização
                                    da mulher e de sua inclusão no processo de desenvolvimento social, econômico, político 
                                    e cultural do País.
                                </p>
                                <p>
                                    Hoje, a questão de gênero está incluída nas políticas dos três níveis de Governo.
                                    Além disso, percebe-se uma crescente mobilização da sociedade civil na busca de igualdade
                                    entre homens e mulheres, em termos de direitos e obrigações. Essas mudanças têm sido 
                                    possíveis a partir de um processo contínuo de cooperação transversal entre a SPM e os demais
                                    Ministérios, a sociedade civil e a comunidade internacional. 

                                </p>
                                <!--<ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>-->
                                <a href="http://www.spm.gov.br/" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Site
                                    </button> </a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <a href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2015/lei/L13104.htm" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Site do Projeto
                                    </button> </a>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Mapa da Justiça</h2>                                    
                                <img class="img-fluid d-block mx-auto" src="img/projetos/iconMapa.png" alt="">
                                <p>
                                    O Mapa da Justiça fornece uma localização da Rede de Atendimento às mulheres, que reúne ações e serviços das áreas da assistência social, justiça, segurança pública e saúde, integrando a Rede de Enfrentamento, ao contemplar o eixo de assistência previsto na Política Nacional de Enfrentamento à Violência Contra as Mulheres.
                                </p>
                                <p>
                                    Buscando a identificação e encaminhamento adequados das mulheres em situação de violência e a integralidade e humanização da assistência, a Rede de Atendimento é composta por serviços especializados, como os Centros de Referência de Atendimento à Mulher (CRAM) e os Centros de Referência Especializados de Assistência Social (CREAS), e não-especializados, como os Centros de Referência de Assistência Social (CRAS).
                                </p>
                                <a href="http://sistema3.planalto.gov.br/spmu/atendimento/atendimento_mulher.php" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Mapa da Rede
                                    </button> </a>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Denuncie 1 -->
    <div class="portfolio-modal modal fade" id="denuncie1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Disque 180</h2>
                                <img class="img-fluid d-block mx-auto" src="img/projetos/icon180.png" alt="">
                                <p>
                                    O Ligue 180 foi criado pela Secretaria de Políticas para as Mulheres da Presidência da República (SPM-PR), em 2005, para servir de canal direto de orientação sobre direitos e serviços públicos para a população feminina em todo o país (a ligação é gratuita). 
                                </p>
                                <p>
                                    Ele é a porta principal de acesso aos serviços que integram a rede nacional de enfrentamento à violência contra a mulher, sob amparo da Lei Maria da Penha, e base de dados privilegiada para a formulação das políticas do governo federal nessa área. 
                                </p> 
                                <p>
                                    O Ligue 180 desempenha papel central, ao lado do programa ‘Mulher, Viver sem Violência’, lançado em março de 2013, com o objetivo de cobrir o país com serviços públicos integrados, inclusive nas áreas rurais latu sensu, mediante a utilização de unidades móveis para o campo, a floresta e as águas. 
                                </p>
                                <p>
                                    Em março de 2014, o Ligue 180 transformou-se em disque-denúncia, com capacidade de envio de denúncias para a Segurança Pública com cópia para o Ministério Público de cada estado. Para isso, conta com apoio financeiro do programa ‘Mulher, Viver sem Violência’, propiciando-lhe agilidade no atendimento, inovações tecnológicas, sistematização de dados e divulgação.  
                                </p>

                                <a href="http://www.spm.gov.br/ligue-180" target="_blank"> <button class="btn btn-primary" type="submit">                 
                                        Ver Projeto
                                    </button> </a>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Custom styles for this template -->
<link href="css/empodera.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/empodera.js"></script>

</html>
