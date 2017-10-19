<?php 
//VAI PARA O HTML
//Local onde está a PDO que puxa do banco de dados
//A variavel recebe o valor do return da function assim posso trabalhar tanto a tabela usuarios quanto a img
//Fazemos um while para jogar as imagens num array e de lá puxamos por sua id.
@require_once("./adm/php/verDados.php");
$exibirImg = exibirImg();
while($msg_login = $exibirImg->fetch(PDO::FETCH_ASSOC)):
    $maedesanto[] = $msg_login['url'];
endwhile;

//Numero do Array começa a contar em 0, mas numero da linha na tabela começa em 1, então o arquivo no array 0 deve ter value 1:
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Maison Chic</title>
    <script src="https://use.typekit.net/zbv4fek.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}

    </script>

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Aqui vai as Tags das Redes Sociais, é o que faz a miniatura no facebook!-->
    <!-- Motores de Busca -->
    <meta name="description" content="Compartilhe elegância e a beleza que você merece, tudo isso e muito mais você encontra em primeira mão no Maison Chic.">
    <meta name="image" content="https://imgur.com/a/PzGht">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Maison Chic">
    <meta itemprop="description" content="Compartilhe a elegância e beleza que você merece, tudo isso e nós oferecemos em primeira mão para no Maison Chic.">
    <meta itemprop="image" content="https://imgur.com/a/PzGht">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Maison Chic Coiffeur">
    <meta name="og:description" content="Compartilhe a elegância e beleza que você merece, tudo isso e nós oferecemos em primeira mão para no Maison Chic.">
    <meta name="og:image" content="https://imgur.com/a/k1E1O">
    <meta name="og:url" content="http://www.maizon.juracer.xyz">
    <meta name="og:site_name" content="Maison Chic Coiffeur">
    <meta name="og:locale" content="pt_BR">
    <meta name="fb:app_id" content="1168589039940856">
    <meta name="og:type" content="website">
    <!-- Fim das Metas Tags -->

    <!--MAPS-->
    <!--Google Maps PErsonalizado-->
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="./css/maps.css" rel='stylesheet' type='text/css'>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

    <!-- Fa Fa Fonts -->


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Aqui Vai nosso Script que vai trocar o endereço automaticamente-->

    <!-- Identificação do APP e da URL -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1287148898061798";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>



    <div class="page" id="top">

        <nav id="main-nav">

            <div class="full-wrapper relative">


                <div id="nav-menu-wrap">
                    <div id="nav-page-section">
                        <ul>
                            <li id="p"></li>
                            <li>
                                <div class="fb-like" data-href="https://www.facebook.com/maisonchic.salaodebeleza/" data-layout="button_count" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
                            </li>
                            <li class=""><a href="#section1"><span class="glyphicon glyphicon-scissors"></span> Nossa História</a></li>
                            <li><a href="#section2"><span class="glyphicon glyphicon-globe"></span> Onde Estamos ?</a></li>
                            <li><a href="section3"><span class="glyphicon glyphicon-thumbs-up"></span> Seu Comentário</a></li>
                        </ul>
                    </div>
                    <div class="separator-menu"></div>

                    <!-- [end #nav-section] -->
                    <div id="nav-tools-section">
                        <ul>
                            <li><a href="#" class="register-btn-nav">Galeria de Destaque</a></li>
                            <li><a href="#" class="register-btn-nav">Nosso Espaço</a></li>
                            <li><a href="#" class="register-btn-nav">Enviar Mensagem</a></li>
                        </ul>
                    </div>

                    <!-- [end #nav-tools-section] -->
                </div>

                <!-- humber menu & overlay menu-->
                <div class="button_container" id="toggle">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>

                <div class="overlay" id="overlay">
                    <nav class="overlay-menu">
                        <ul>
                            <li><a href="#">Nossa História</a></li>
                            <li><a href="#">Onde Estamos?</a></li>
                            <li><a href="#">Seu Comentário</a></li>
                            <li><a href="#">Galeria de Destaque</a></li>
                            <li><a href="#">Nosso Espaço</a></li>
                            <li><a href="#">Enviar Mensagem</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="clear"></div>


            </div>

        </nav>

        <div class="home-section">

            <canvas id="canvas"></canvas>

            <div id="wrapper">


                <div id="home-content">
                    <div id="recebedora" style="background-image: url('<?php echo $maedesanto[0];//0=CAPA ?>')">



                    </div>
                    <div id="home-text">
                        <!--DIV que recebe o fundo-->


                        <div id="title">
                            <img src="./img/logo_maison_branco.png" width="47%">
                            <h2>
                                <span style='color: #00acd4'>BELEZA</span>
                                <span style='display: none; color: #755f93'>MELHORES CORTES</span>
                                <span style='display: none; color: #c23e37'>VOCÊ SEMPRE LINDA</span>
                                <span style='display: none; color: #c76c17'>DIA DE NOIVA</span>
                                <span style='display: none; color: #34a853'>ELEGÂNCIA</span>
                            </h2>

                            <h3>Você merece muito, você merece Maison Chic</h3>

                        </div>
                        <!-- [end #title] -->

                        <div class="local-scroll">
                            <a data-scroll href="#about" class="scroll-down">
                                <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                        <!-- [end #local-scroll] -->
                    </div>
                    <!-- [end #home-text] -->
                </div>
                <!-- [end #home-content] -->
            </div>
            <!-- [end #wrapper] -->
        </div>
        <!-- [end .home-section] -->


        <section class="page-section animated bkg-white" id="section1">
            <div class="container">
                <div class="intro-body">
                    <h2 class="">Há Mais de 20 Anos Contruindo Sonhos</h2>

                    <!-------------------VIDEO PROMOCIONAL------------------------------->
                    <section class="video-promo-hero">
                        <div class="video-promo-hero-bg" style="background: url('<?php echo $maedesanto[1];//1=VIDEO ?>') no-repeat 50% 100%;">
                            <div class="row vcenter">
                                <div class="col-md-12 vcenter"><a class="video-promo-watch" id="play-button" href="#"><i class="fa fa-play-circle video-promo-play-button"></i>Assistir Video Promocional</a></div>
                            </div>
                        </div>
                        <div class="video-promo-video-wrapper"><a class="close video-promo-video-close" id="pause-button" href="#">x</a>
                            <div class="video-promo-youtube-wrapper">
                                <div class="video-container">
                                    <iframe id="youtube-promo-video" src="https://www.youtube.com/embed/qE7JzifyGc0?enablejsapi=1&amp;html5=1" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-------------------FIM DO VIDEO PROMOCIONAL------------------------------->

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

            </div>

        </section>

        <!-- [end .page-section] -->

        <section class="page-section animated bkg-white" id="about">
            <div class="container">

                <div class="row" align="center" id="projeto">


                    <a href="#revele" data-toggle="collapse">
                        <img src="<?php echo $maedesanto[2];//2=Fundadora ?>" class="img-circle person" alt="noiva" width="250" height="250">
                    </a>
                    <br>
                    <br>
                    <h3>"Jo Rigon - Fundadora"</h3>

                </div>

            </div>
        </section>

        <!------------------------------AQUI ENTRA O MAPA--------------------------->
        <section>
            <header>
                <h1>Onde Estamos Localizados?</h1>
            </header>

            <section id="cd-google-map">
                <div id="google-container"></div>

                <address>Shopping Rosa - R. João Caetano, 185 - Loja 102 - Alcantara, São Gonçalo - RJ, 24710-405</address>
            </section>
        </section>
        <!------------------------------FIM DO MAPA--------------------------->

        <hr><br>
        <section class="container-fluid text-center">            
                <div class="col-sm-12"><h1 id="brasil">Seja Um Dos Clientes Mais Satisfeitos do Brasil</h1></div><br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-4"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonicavicka%2Fposts%2F1253933174734031%3A0&width=500" width="500" height="355" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                <div class="col-sm-4"> <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonicavicka%2Fposts%2F1253933174734031%3A0&width=500" width="500" height="355" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                    <div class="col-sm-4"> <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonicavicka%2Fposts%2F1253933174734031%3A0&width=500" width="500" height="355" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                </div>
                <div class="col-sm-12">
                <div class="col-sm-6"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonicavicka%2Fposts%2F1253933174734031%3A0&width=500" width="500" height="355" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                <div class="col-sm-6"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonicavicka%2Fposts%2F1253933174734031%3A0&width=500" width="500" height="355" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                </div>
            </div>
            
            
           
            
        </section>


        <!------------------------------AQUI ENTRA OS COMENTARIOS--------------------------->
        <section class="page-section animated bkg-gray" id="section2">
            <div class="container">

                <div class="process-body">
                    <!-- Aqui vou inserir o Comentário do facebook -->
                    <div class="fb-comments" data-href="http://www.maisonchic.com.br" data-numposts="7" data-width="100%"></div>

                </div>

            </div>
        </section>

        <!-- AQUI ENTRA O FOOTER -->

        
    </div>
    <!-- [end page] -->





    <!-- [Script stiky menu ] -->
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 50) {
                document.getElementById("main-nav").className = "scrolling";
            } else {
                document.getElementById("main-nav").className = "";
            }
        })

    </script>

    <!-- [scrolling page] -->
    <script type='text/javascript' src="https://cferdinandi.github.io/smooth-scroll/dist/js/smooth-scroll.js"></script>
    <script type='text/javascript'>
        smoothScroll.init({
            speed: 1500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic' // Easing pattern to use
        });

    </script>

    <!--Scripts-->
    <!--Script do Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./js/maps.js"></script>
    <!--JS do Efeito do Principal do Index-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>
    <script src="./js/index.js"></script>
    <!--JS do VIDEO PROMOCIONAL-->
    <script src="./js/video.js"></script>


</body>

</html>
