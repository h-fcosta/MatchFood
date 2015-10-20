<!DOCTYPE html>
<html lang="en">
    <?php
    include ("connect.php");
    ?>
    <head>
        <title>MatchFood</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>   
        <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script src="js/Lobster_13_400.font.js" type="text/javascript"></script>
        <script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
        <script src="js/FF-cash.js" type="text/javascript"></script>
        <script src="js/easyTooltip.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/bgSlider.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/tms-0.3.js" type="text/javascript"></script>
        <script src="js/tms_presets.js" type="text/javascript"></script>
        
        <script src="scripts/js.js" type="text/javascript"></script>
    </head>

    <body id="page1">
        <div id="bgSlider"></div>
        <div class="bg_spinner"></div>
        <div class="extra">
            <!--==============================header=================================-->
            <header>
                <div class="top-row">
                    <div class="main">
                        <div class="wrapper">
                            <h1><a href="index.html">MatchFood</a></h1>
                            <ul class="pagination">
                                <li class="current"><a href="images/bg-img1.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-row">
                    <div class="menu-border">
                        <div class="main">
                            <nav>
                                <ul class="menu">
                                    <li><a class="active" href="index.html">Home</a></li>
                                    <li><a href="sobre.html">Sobre Nós</a></li>
                                    <li><a href="favoritos.html">Favoritos</a></li>
                                    <li><a href="contato.html">Contato</a></li>
                                    <li class="last"><a href="cadastro.html">Cadastre-se</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!--==============================content================================-->
            <div class="inner">
                <div class="main">
                    <section id="content">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/slider-img1.jpg" alt="" />
                                    <div class="banner">
                                        <strong class="title">
                                            <strong>Sua</strong><em>Lasanha</em>
                                        </strong>
                                        <p class="p3">Uma deliciosa receita de lasanha.</p>
                                        <a class="button-1" href="receita.html">Leia mais</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/slider-img2.jpg" alt="" />
                                    <div class="banner">
                                        <strong class="title">
                                            <strong>Seu</strong><em>Shimeji</em>
                                        </strong>
                                        <p>Um shimeji muito bem temperado na manteiga.</p>
                                        <a class="button-1" href="#">Leia mais</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/slider-img3.jpg" alt="" />
                                    <div class="banner">
                                        <strong class="title">
                                            <strong>Risoto</strong><em>Limao</em>
                                        </strong>
                                        <p>Risoto de limão siliciano, parece bom, não? É maravilhoso.</p>
                                        <a class="button-1" href="#">Leia mais</a>
                                    </div>
                                </li>
                            </ul>
                            <a class="banner-2" href="#"></a>
                        </div>
                        <ul class="pags">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                        <div class="bg">
                            <div class="padding">
                                <div class="wrapper">
                                    <article class="col-1">
                                        <h3>Veggie</h3>
                                        <p align="justify">Se você é vegetariano e quer pesquisar por diversas receitas vegetarianas, é só pesquisar pela tag "veggie", sabia? Quer ver? É fácil e rápido.</p>
                                        <div class="relative">
                                            <a class="button-2" href="#">Clique Aqui</a>
                                        </div>
                                    </article>
                                    <article class="col-1">
                                        <h3>Geek Fast Food</h3>
                                        <p align="justify">Sabe aquele seu super herói favorito? Agora ele pode ser seu burguer favorito também! Venha ver na Hamburgueria do Super o sabor delicioso do seu herói.</p>
                                        <div class="relative">
                                            <a class="button-2" href="http://www.hamburgueriadosuper.com.br/" target="_blank">Clique Aqui</a>
                                        </div>
                                    </article>
                                    <article class="col-2">
                                        <h3>Procure Aqui</h3>
                                        <p>
                                        <form action="pesquisa.php" method="get">
                                            <input type="text" placeholder="Pesquisar" name="s" onkeypress="VerificaTecla()"/>
                                            <input type="submit" name="submit" value="Match!" class="button-3"/>
                                        </form>
                                        </p>
                                        <!--
                                           <div class="relative">
                                               <a class="button-2" href="#">Pesquisar</a>
                                           </div>
                                        -->  
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="padding-2">
                            <div class="indent-top">
                            </div>
                        </div>
                </div>
                </section>
                <div class="block"></div>
            </div>
        </div>
        <!--==============================footer=================================-->
        <footer>
            <div class="padding">
                <div class="main">
                    <div class="wrapper">
                        <div class="fleft footer-text">
                            <span>MatchFood</span> &copy; 2015
                            <strong>NTRQ <br>

                                Nati & Rique</strong>
                        </div>
                        <ul class="list-services">
                            <li>Siga-nos:</li>
                            <li><a class="tooltips" title="facebook" href="https://www.facebook.com/matchfood"></a></li>
                            <li class="item-1"><a class="tooltips" title="twitter" href="https://www.twitter.com/"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript"> Cufon.now();</script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.slider')._TMS({
                    duration: 1000,
                    easing: 'easeOutQuart',
                    preset: 'simpleFade',
                    slideshow: 10000,
                    banners: 'fade',
                    pauseOnHover: true,
                    waitBannerAnimation: false,
                    pagination: '.pags'
                });
            });
        </script>
    </body>
</html>