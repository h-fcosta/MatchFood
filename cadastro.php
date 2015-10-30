<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MatchFood - Cadastro</title>
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
    </head>

    <body id="page2">
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
                                    <li><a class="active" href="sobre.php">Sobre Nós</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                    <li><a href="logout.php">Bem vindo! Sair</a></li>';
                        } else {
                            echo '<div class="main-menu">
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a class="active" href="sobre.php">Sobre Nós</a></li>
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="cadastro.php">Cadastre-se </a></li>
                                              <li><form action="actions/login.php" method="post" name="login">
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
                                    <!--div class="indent-left">
                                        <p align="justify"><h3></h3>
                                        <h6></h6></p>
                                        <p align="justify"></p>
                                        <div class="wrapper p3">
                                            <div class="extra-wrap">
                                                <p align="justify"><h6></h6></p>
                                            </div>
                                        </div>
                                    </div-->
                                    <div class="bg">
                                        <div class="padding">
                                            <form action="actions/cadastrar.php" method="post" name="cadastro">
                                                <p align="justify"><h3>Cadastro</h3>
                                                <table class="table table-condensed">
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="nome" class="form-control" placeholder="Nome"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="email" class="form-control" placeholder="Email"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="password" name="senha" class="form-control" placeholder="Senha"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="password" name="senhaRep" class="form-control" placeholder="Repetir a Senha"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="submit" value="Cadastrar" class="btn btn-default"/>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                            <h3></h3>
                                            <h6></h6>
                                            <p align="justify" class="p1"><span class="color-3"></span></p>
                                            <div class="wrapper">
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-2">
                                    <!--h3 class="border-bot">Comentários</h3>
                                    <blockquote>Muito bom! Não precisa de muita força para cozinhar, MatchFood facilitou bastante.</blockquote>
                                    <div class="alignright img-indent-bot">
                                        <strong class="color-3">Thor</strong>
                                    </div>
                                    <blockquote>Agora posso fazer meu prato favorito na casa dos amigos, a receita está sempre na ponta dos dedos (ou das garras).</blockquote>
                                    <div class="alignright img-indent-bot">
                                        <strong class="color-3">Wolverine</strong>
                                    </div>
                                    <blockquote>Quando estou com pressa e não quero sair de casa para comprar algum ingrediente, descubro receitas novas com ingredientes que tenho em casa!</blockquote>
                                    <div class="alignright img-indent-bot">
                                        <strong class="color-3">Flash</strong>
                                    </div>
                                    <blockquote>Posso cozinhar a qualquer momento, usando as minhs receitas offline. Seja no escuro ou não.</blockquote>
                                    <div class="alignright">
                                        <strong class="color-3">Batman</strong>
                                    </div-->
                                </article>
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
