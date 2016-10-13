<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SS2I</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- lien css -->
        <link href="css/styleEffetWork.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- lien FontAwesome -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <!-- FivIcon -->
        <link rel="icon" type="image/png" href="img/image_page1.png" />


    </head>
    <body>

        <!-- Début de la barre de navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tmNavbar" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="couleur_brand" href="#position_block_milieu">Accueil</a>
                </div>

                <div class="collapse navbar-collapse" id="tmNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#team" id="bouton1">Team</a></li>
                        <li><a href="#page_3" id="bouton2">Services</a></li>
                        <li><a href="#page_4" id="bouton3">Portfolio</a></li>
                        <li><a href="#page_5" id="bouton4">About</a></li>
                        <li><a href="#page_6" id="bouton5">Contact</a></li>
                    </ul>
                </div>
            </div> <!--Container -->
        </nav>

        <!-- fin de la barre de navigation -->
        <!-- Premiere page -->

        <div id="position_block_milieu">L</div>
        <div class="visible-xs">L</div>
        <div class="container-fluid">
            <div class="row  premiere_page">
                <img class="img-circle col-md-offset-5 col-md-2 image_centre" src="img/image_page1.png"/>
                <h1 class="col-md-offset-4 col-md-4">Site Internet SSII</h1> <br />
                <h1 class="col-md-offset-3 col-md-6">Developpement web, Création site internet</h1>
                <a type="button" href="#team" class="col-md-offset-5 col-md-2 col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 bouton_accueil">Continuer</a>
            </div>
        </div>

        <!-- Fin de la premiere page -->

        <div class="container-fluid">
           <div class="visible_xs block_xs_position"></div>
            <div class="row  page_2" id="team">
                <div class="col-md-offset-2 col-md-2 paragraphe_team">
                    <div class="visible-xs"></div>
                    <img class="img-circle col-md-12 image_team image_team2" src="img/team01.jpg"/>
                    <h3>Mike Arney</h3>
                    <br />
                    <p>Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest, expetendam putamus.</p>
                </div>
                <div class="visible-xs"></div>
                <div class="col-md-offset-1 col-md-2 paragraphe_team">
                    <img class="img-circle col-md-12 image_team image_team2" src="img/team02.jpg"/>
                    <h3>Tim Davies</h3>
                    <br />
                    <p>Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest, expetendam putamus.</p>
                </div>
                <div class="visible-xs"></div>
                <div class="col-md-offset-1 col-md-2 paragraphe_team">
                    <img class="img-circle col-md-12 image_team image_team2" src="img/team03.jpg"/>
                    <h3>Michele Lampa</h3>
                    <br />
                    <p>Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest, expetendam putamus.</p>
                </div>
            </div>


            <div class="row" id="page_3">
               <div class="visibile-xs block_xs_position"></div>
                <h3 class="col-lg-offset-4 col-lg-4 service_titre">Les services proposés :</h3>
                <div class="col-lg-12">
                    <div class="col-lg-offset-2 col-lg-2 col-xs-offset-1 col-xs-10 service">
                        <i class="fa fa-3x fa-trophy Icon"></i><p>PREMIUM QUALITY<br/><small>LOREM IPSUM DOLOR</small></p>
                        <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                    <div class="col-lg-offset-0 col-lg-2 col-xs-offset-1 col-xs-10 service">
                        <i class="fa fa-3x fa-cloud Icon"></i><p>CLOUD SERVICES<br/><small>LOREM IPSUM DOLOR</small></p>
                        <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                    <div class="col-lg-offset-0 col-lg-2 col-xs-offset-1 col-xs-10 service">
                        <i class="fa fa-3x fa-lock Icon"></i><p>SECURED ACCOUNTS<br/><small>LOREM IPSUM DOLOR</small></p>
                        <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                    <div class="col-lg-offset-0 col-lg-2 col-xs-offset-1 col-xs-10 service">
                        <i class="fa fa-3x fa-thumbs-up Icon"></i><p>100% SATISFACTION<br/><small>LOREM IPSUM DOLOR</small></p>
                        <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>

            </div>



            <div class="container" id="page_4" >
                <div class="portefolio_haut">
                    <div class="row">
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-10 col-xs-12 element_portefolio work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="img/Work1.jpg" alt="">
                                <div class="overlay">
                                    <h2>Work 1</h2>
                                    <a class="info" href="#">Lien ici</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-10 col-xs-12 element_portefolio work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="img/work2.jpg" alt="">
                                <div class="overlay">
                                    <h2>Work 2</h2>
                                    <a class="info" href="#">Lien ici</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-10 col-xs-12 element_portefolio work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="img/work3.jpg" alt="">
                                <div class="overlay">
                                    <h2>Work 3</h2>
                                    <a class="info" href="#">Lien ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portefolio_bas">
                    <div class="row">
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-10 col-xs-12 element_portefolio work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="img/work4.jpg" alt="">
                                <div class="overlay">
                                    <h2>Work 4</h2>
                                    <a class="info" href="#">Lien ici</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-10 col-xs-12 element_portefolio work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="img/work5.jpg" alt="">
                                <div class="overlay">
                                    <h2>Work 5</h2>
                                    <a class="info" href="#">Lien ici</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-10 col-xs-12 element_portefolio work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="img/work6.jpg" alt="">
                                <div class="overlay">
                                    <h2>Work 6</h2>
                                    <a class="info" href="#">Lien ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  page_5" id="page_5">
                <div class="col-md-offset-0 col-md-5 col-xs-offset-1 col-xs-10">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/carousel1.png" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/carousel2.png" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/carousel3.jpg" alt="Flower">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-0 col-md-3 col-xs-offset-1 col-xs-10">
                    <h3>About :</h3>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
                <div class="col-md-offset-0 col-md-3 col-xs-offset-1 col-xs-10" id="paragraphe2_about">
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
            </div>

            <div class="row page_6" id="page_6">
                <form class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <h2>Contact <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></h2>
                    <div>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" />
                    </div>
                    <div>
                        <label for="courriel">Courriel :</label>
                        <input type="email" id="courriel" />
                    </div>
                    <div>
                        <label for="message">Message :</label>
                        <textarea id="message"></textarea>
                    </div>

                    <div class="button">
                        <button type="submit">Envoyer votre message</button>
                    </div>
                </form>
                <iframe class="col-xs-12 col-sm-12 col-md-6 col-lg-6"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.014762789856!2d2.390179616028328!3d48.857928879287364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d8b04f6a0c3%3A0x1ceac17c26c68bf9!2sITIC+Paris!5e0!3m2!1sfr!2sfr!4v1474480150287" width="800" height="600" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>


        <!-- FOOTER -->
        <footer class="container-fluid">
            <div class="row">
                <p class="pull-left copyright col-md-offset-2 col-md-3 col-xs-offset-1 col-xs-10 footer_font_size">
                    &copy; 2016 copyright <a href="#">Paul Goncalves</a>
                </p>
                <div class="col-md-offset-2 col-md-3 col-xs-offset-1 col-xs-10">
                    <a href="https://github.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-github-alt fa-fw"></i> <span class="network-name"></span></a>
                    <a href="https://twitter.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-twitter fa-fw"></i> <span class="network-name"></span></a>
                    <a href="https://www.facebook.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-facebook fa-fw"></i> <span class="network-name"></span></a>
                    <a href="https://plus.google.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-google-plus fa-fw"></i> <span class="network-name"></span></a>

                </div>
            </div>
        </footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/scroll.js"></script>

        <script>
            $(document).ready(function() {
                $('.Icon').hide();
                $(window).scroll(function() {
                    if ($(document).scrollTop() > 2000) {
                        $('.Icon').show(1000);
                    }
                    else {
                        $('.Icon').hide(800);
                    }
                });
            });
            
            $(document).ready(function() {
                $('.work').hide();
                $(window).scroll(function() {
                    if ($(document).scrollTop() > 2500) {
                        $('.work').show(1500);
                    }
                    else {
                        $('.work').hide(800);
                    }
                });
            });
            
            $(document).ready(function() {
                $('.image_team2').hide();
                $(window).scroll(function() {
                    if ($(document).scrollTop() > 600) {
                        $('.image_team2').fadeIn(3000);
                    }
                    else {
                        $('.image_team2').fadeOut(800);
                    }
                });
            });
        </script>

    </body>
</html>