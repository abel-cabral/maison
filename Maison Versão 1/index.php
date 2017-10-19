<?php
//Aqui puxamos a cabeça do documento
require_once ('./php/header.php');


?>

    <body>
        <div class="container-fluid">
            
          

            <!-- Share Menu -->
            <nav class="shareMenu">
                <a href="#" class="share-menu-trigger">
                    <i class="step icon-thumbs-up size-24 icon-gold"></i>
                </a>

                <div class="tweet-share">

                    <!--Links Sociais  -->
                    <a style="position: relative; float: left; top: 0%; left:2%; padding-right: 5px;" href="https://api.whatsapp.com/send?l=pt&phone=55219999999"><img src="images/whatsapp.png" height="50" width="50"></a>
                    <a style="position: relative; float: left; top: 0%; left:2%;" href="https://www.facebook.com/messages/t/968815286480388"><img src="images/messenger.png" height="50" width="50"></a>
                    <a style="position: relative; float: left; top: 0%; left:2%;" href="https://www.instagram.com/maison_spa/"><img src="images/instagram.png" height="50" width="50"></a>
                    <a style="position: relative; float: left; top: 0%; left:2%;" href="https://www.facebook.com/maisonchic.salaodebeleza/"><img src="images/facebook.png" height="50" width="50"></a>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');

                    </script>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');

                    </script>

                </div>
            </nav>

            <!-- Main -->
            <section class="container-fluid">

                <!-- FORMS -->

                <!-- INTRO -->

                <section class="section-intro" id="section-intro" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">

                    <div class="fb-like" data-href="https://www.facebook.com/maisonchic.salaodebeleza/" data-layout="standard" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
                    <div class="content">



                        <div class="container-template">
                            <h1>
                                <i class=" step icon-diamond size-24 icon-gold"></i>
                                <center><span class="seconday"><img src="images/logo_maison_branco.png" width="50%"></span></center>

                            </h1>
                        </div>
                    </div>

                </section>
                <!-- inicio do site -->

                <br>
                <section class="stastistical-part" id="stastistical-part">

                    <!-- section-seperator -->
                    <div class="section-seperator">
                        <div class="container-template">
                            <h2>
                                <span class="seconday">Sessão</span> Jô Rigon</h2>
                        </div>
                    </div>
                </section>

                <!-- SECTION -->

                <section class="section-team" id="section-team">

                </section>
                <!-- SECTION -->
                <section class="contact-form">

                    <div class="headergroup"></div>

                    <div class="container"></div>
                    <!-- End Inner -->

                    <br />

                    <div class="container-template" id="section-team">

                        <div class="headergroup">
                            <h2 class="in-point">
                                <span class="seconday text-gold">Você Merece Jô Rigon</span>
                                <span>Serviços de beleza com requinte</span>

                                <span class="seconday">Maison Chic é o melhor para as pessoas mais exigentes.</span>
                            </h2>
                        </div>
                    </div>
                </section>
                <section class="section-team">
                    <!-- Team Members  -->

                    <div id="team-member" class="container">
                        <br>

                        <div class="team-member-text content-template col-sm-12">

                            <div class="row" align="center" id="projeto">


                                <a href="#revele" data-toggle="collapse">
                                    <img src="images/jo.jpg" class="img-circle person" alt="noiva" width="355" height="355">
                                </a>
                                <div id="revele" class="collapse">
                                    <img src="images/mch5.png" class="img" alt="noiva1" width="1155" height="355">

                                </div>

                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </section>


                <!-- SALÃO SECTION ---------------------->

                <section class="stastistical-part" id="stastistical-part">

                    <!-- section-seperator -->
                    <div class="section-seperator">
                        <div class="container-template">
                            <h2>
                                <span class="seconday">Sessão</span> SALÃO
                            </h2>
                        </div>
                    </div>

                </section>

                <section class="stastistical-part" id="stastistical-part">

                </section>

                <section class="timeline-part" id="#">

                    <div class="content">
                        <div class="container-template">

                            <div class="headergroup">
                                <h2 class="in-point">
                                    <span class="seconday text-gold">Tour Maison Chic</span>
                                    <span> Sempre Bela</span>
                                </h2>
                            </div>
                            <!--   Carossel -->

                            <div class="w3-content w3-display-container">
                                <img class="mySlides" src="fotos/ft.jpg" style="width:100%">
                                <img class="mySlides" src="fotos/ft2.jpg" style="width:100%">
                                <img class="mySlides" src="fotos/ft3.jpg" style="width:100%">
                                <img class="mySlides" src="fotos/ft4.jpg" style="width:100%">

                                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
                                    if (n > x.length) {
                                        slideIndex = 1
                                    }
                                    if (n < 1) {
                                        slideIndex = x.length
                                    }
                                    for (i = 0; i < x.length; i++) {
                                        x[i].style.display = "none";
                                    }
                                    x[slideIndex - 1].style.display = "block";
                                }

                            </script>

                        </div>
                    </div>

                </section>

                <!-- PAGE SOCIAL SECTION ------------------------------------>

                <section class="stastistical-part" id="eventos">

                    <!-- section-seperator -->
                    <div class="section-seperator">
                        <div class="container-template">
                            <h2>
                                <span class="seconday">Sociais</span> EVENTOS
                            </h2>
                        </div>
                    </div>

                    <!--  SECTION-->

                    <section class="events-part" id="events-part">

                    </section>

                    <!-- SECTION-->

                    <section class="section-team" id="section-team">

                    </section>
                    <!-- SECTION-->
                    <section class="contact-form" id="contact-form">

                        <div class="headergroup">

                        </div>

                        <div class="container">

                        </div>
                        <!-- End Inner -->

                        <br />

                    </section>


                    <section>

                        <!-- Rede Social -->
                        <section class="testimonials-part" id="eventos">

                            <div class="container-fluid " style="color:white; opacity: 0.6">
                                <div class="row-fluid">
                                    <div class="container-template">
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                    </div>
                                    <div class="container-template">
                                        <!--Body content-->
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- rede social -->

                        <br/>

                        <!-- SECTION----------------------------------------------------- -->

                        <section class="stastistical-part" id="comentarios">

                            <!-- section-seperator -->
                            <div class="section-seperator">
                                <div class="container-template">
                                    <h2>
                                        <span class="seconday">Sociais</span> COMENTÁRIOS
                                    </h2>
                                </div>
                            </div>

                            <!-- Aqui vou inserir o Comentário do facebook -->
                            <div class="fb-comments" data-href="http://www.maisonchic.com.br" data-numposts="7" data-width="100%"></div>


                        </section>
                        <!--  SECTION-->

                        <section class="events-part" id="events-part">

                        </section>

                        <!-- SECTION-->

                        <section class="section-team" id="section-team">

                        </section>
                        <!-- SECTION-->
                        <section class="contact-form" id="contact-form">

                            <div class="headergroup">

                            </div>

                            <div class="container">

                            </div>
                            <!-- End Inner -->

                            <br>

                        </section>

                        <section class="section-team">


                            <div class="container-fluid" style="color:white; opacity: 0.6">
                                <div class="row-fluid">
                                    <div class="span2">
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                    </div>
                                    <div class="span10">
                                        <!--Body content-->
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <?php
                            @require_once('./maps/maps.html');
                        ?>


                            <footer class="sticky-footer">
                                <div class="container-fluid">
                                    <div class="text-center">
                                        <small>Desenvolvido por <a href="https://www.facebook.com/abel.yuracer">2016.1</a></small>
                                    </div>
                                </div>
                            </footer>

            </section>

        </div>

        <!--Scripts-->
        <!--Script do Google Maps-->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="./maps/js/index.js"></script>

        <script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/jquery-migrate.js'></script>
        <script type='text/javascript' src='js/jquery.form.js'></script>
        <script type='text/javascript' src='js/jquery.mobile.custom.js'></script>
        <script type='text/javascript' src='js/modernizr.js'></script>
        <script type='text/javascript' src='js/response.js'></script>
        <script type='text/javascript' src='js/swiper.js'></script>
        <script type='text/javascript' src='js/waypoints.js'></script>
        <script type='text/javascript' src='js/jquery.stellar.js'></script>
        <script type='text/javascript' src='js/module.js'></script>
        <script type='text/javascript' src='js/bootstrap.min.js'></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();

        </script>

    </body>

    </html>
