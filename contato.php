<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MatchFood - Contato</title>
        <meta charset="utf-8">

        <link rel="icon" href="images/teste.png" type="image/png" >

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
        <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
        <![endif]-->
        <!--[if lt IE 9]>
                    <script type="text/javascript" src="js/html5.js"></script>
            <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
            <![endif]-->
    </head>
    <body id="page6">
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="sobre.php">Sobre Nós</a></li>
                                    <li><a class="active" href="contato.php">Contato</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                    <li><a href="logout.php">Bem vindo! Sair</a></li>';
                        } else {
                            echo '<div class="main-menu">
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="sobre.php">Sobre Nós</a></li>
                                <li><a class="active" href="contato.php">Contato</a></li>
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
                    </div>
                </div>
            </header>

            <!--==============================content================================-->
            <div class="inner">
                <div class="main">
                    <section id="content">
                        <div class="indent">
                            <div class="wrapper">
                                <article class="col-1">
                                    <div class="bg" style="padding-right: 15px;">
                                        <div class="indent-left">
                                            <h3>Contato</h3><br>
                                            <p align="justify">Se você quiser compartilhar sua receita com o mundo, mande para <a href="mailto:contato.matchfood@gmail.com">contato.matchfood@gmail.com</a> e curta nossa página no <a href="https://www.facebook.com/matchfood/">Facebook</a> e fique por dentro das novidades</p><br>
                                            <div class="p3">
                                                <h3>Os Desenvolvedores</h3><br>
                                                <div class="wrapper p3">
                                                    <figure class="img-indent"><img src="images/henrique.jpg" class="img-circle" style="height:120px; width:120px;" alt="" /></figure>
                                                    <div class="extra-wrap">
                                                        <p align="justify" style="margin-top: 20px;"><b>E-mail:</b> <a href="mailto:henriquefcosta19@gmail.com">henriquefcosta19@gmail.com</a><br>
                                                            <b>Twitter:</b> <a href="https://twitter.com/hfcosta19">@hfcosta19</a><br>
                                                            <b>Instagram:</b> <a href="https://www.instagram.com/henriquefcosta19/">@henriquefcosta19</a><br>
                                                            <b>LinkedIn:</b> <a href="https://br.linkedin.com/in/henriquefcosta19">https://br.linkedin.com/in/henriquefcosta19</a></p>
                                                    </div>
                                                </div>
                                                <div class="wrapper p3">
                                                    <figure class="img-indent"><img src="images/natalia.jpg" class="img-circle" style="height:120px; width:120px;" alt="" /></figure>
                                                    <div class="extra-wrap">
                                                        <p align="justify" style="margin-top: 20px;"><b>E-mail:</b> <a href="mailto:n.menezello@gmail.com">n.menezello@gmail.com</a><br>
                                                            <b>Instagram:</b> <a href="https://www.instagram.com/natimenezello/">@natimenezello</a><br>
                                                            <b>LinkedIn:</b> <a href="https://www.linkedin.com/in/nat%C3%A1lia-menezello-73813367">https://www.linkedin.com/in/natália-menezello-73813367</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--article class="col-2">
                                    <!--h3 class="border-bot indent-bot">Nosso Contato</h3>
                                    <div class="img-indent-bot">
                                        <h6>SÃO PAULO</h6>
                                        <dl>
                                            <dt>Rua Linda com Flores, nº 123 <br> Centro - Campinas.</dt>
                                            <dd><span>E-mail:</span><a href="#">natalia@matchfood.com</a></dd>
                                        </dl>
                                    </div>
                                    <div class="img-indent-bot">
                                        <h6>PARANÁ</h6>
                                        <dl>
                                            <dt>Rua Doida dos Heróis, nº456 <br> Centro - Curitiba.</dt>
                                            <dd><span>E-mail:</span><a href="#">rique@matchfood.com</a></dd>
                                        </dl>
                                    </div>

                                    <!-- 
                                    <h6>Japan</h6>
                                    <dl>
                                        <dt>8901 Marmora Road, Glasgow, D04</dt>
                                        <dd><span>Telephone:</span>  +1 959 603 6035</dd>
                                        <dd><span>FAX:</span>  +1 504 889 9898</dd>
                                        <dd><span>E-mail:</span><a href="#">mail@thomsander.com</a></dd>
                                    </dl>
                                    -->
                                </article-->
                            </div>
                        </div>
                    </section>
                    <div class="block"></div>
                </div>
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
                            <li><a class="tooltips" title="facebook" href="#"></a></li>
                            <li class="item-1"><a class="tooltips" title="twitter" href="#"></a></li>
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