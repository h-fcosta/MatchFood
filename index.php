<!DOCTYPE html>
<html lang="en">
    <?php
    include ("connect.php");
    
    ?>
    <head>
        <title>MatchFood</title>

        <link rel="icon" href="images/teste.png" type="image/png" >

        <meta charset="utf-8">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
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

    </head>

    <body id="page1">
        <div id="bgSlider"></div>
        <div class="bg_spinner"></div>
        <div class="extra">
            <!--==============================header=================================-->
            <header>
                <div class="top-row" align="center">
                    <!--div align="center"-->
                    <a href="index.php"><img src ="images/logo-1.png"></a>
                    <!--/div>
                    <div class="main">
                        <div class="wrapper"-->
                    <ul class="pagination">
                        <li class="current" style="visibility: hidden;"><a href="images/back_wood.jpg"></a></li>
                    </ul>
                    <!--/div>
                </div-->
                </div>
                <div class="menu-row">
                    <div class="menu-border">
                        <?php
                        @session_start();
                        @$status = $_SESSION['logado'];

                        if ($status != null) {
                            echo'<div class="main-menu-log">
                            <nav>
                                <ul class="menu">
                                    <li><a class="active" href="index.php">Home</a></li>
                                    <li><a href="sobre.php">Sobre Nós</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                    <li><a href="logout.php">Bem vindo! Sair</a></li>';
                        } else {
                            echo '<div class="main-menu">
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="index.php">Home</a></li>
                                <li><a href="sobre.php">Sobre Nós</a></li>
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="cadastro.php">Cadastre-se </a></li>
                                              <li><form action="login.php" method="post" name="login">
                                                <table class="tabela">
                                                    <tr>
                                                        <td>
                                                            <input class="form-control login" type="text" name="email" placeholder="Email">
                                                        </td>
                                                        <td>
                                                            <input class="form-control login" type="password" name="senha" placeholder="Senha">
                                                            <input type="submit" name="submit" value="Entrar" style="visibility: hidden; width: 0px;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                    </li>';
                        }
                            ?>
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
                                        <table class="table">
                                            <tr>
                                                <td><input class="form-control" type="text" name="s" placeholder="Pesquisar" style="width: 134px;"/></td>
                                                <td><input class="form-control button-3" type="submit" name="submit" value="Match!"/></td>
                                            </tr>
                                        </table>
                                    </form>
                                </p>
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
            pagination: '.pags'});
    });
</script>
</body>
</html>