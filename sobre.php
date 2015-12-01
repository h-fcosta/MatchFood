<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MatchFood - Sobre Nós</title>
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
                                    <div class="bg">
                                        <div class="padding">
                                            <div class="indent-left">
                                                <p align="justify"><h3>Sobre Nós</h3>
                                                <p align="justify">Se você não sabe se a comida que tem em casa resulta em um bom prato, agora já pode descobrir! Busca de receitas por ingredientes da sua escolha, está a um clique de você.</p>
                                                <p align="justify">A ideia surgiu em uma conversa entre amigos, onde o primeiro foco foram universitários ou pessoas que estavam recentemente morando sozinhas e não sabiam o que cozinhar. Compartilhando essa ideia com nossos amigos, percebemos que além dessas pessoas que moravam em república e queriam descobrir como cozinhar e o que cozinhar, despertou também curiosidade em donas de casa e outras pessoas que cozinham com frequência. "Será que esses ingredientes dariam uma boa receita?"</p>
                                                <br>
                                                <p align="justify"><h3>Por que nos escolher?</h3></p>
                                                <p align="justify">Com certeza você já utilizou algum outro site ou aplicativo em seu celular para pesquisar receitas.</p>
                                                <p align="justify" class="p1">Mas em qual deles você conseguiu descobrir se o que tem no seu armário ou na sua geladeira, seria o suficiente para uma receita sem que você saísse de casa para comprar algo que faltasse? Queremos oferecer à <span class="color-3">você</span>, um meio fácil de descobrir mais na cozinha e também levá-la para todos os lugares.</p>
                                                <br>
                                                <div class="wrapper p3">
                                                    <figure class="img-indent"><img src="images/henrique.jpg" class="img-circle" style="height:170px; width:170px;" alt="" /></figure>
                                                    <div class="extra-wrap">
                                                        <p align="justify" style="margin-top: 20px;">Henrique Fernandes Costa, 21 anos, gaúcho de Porto Alegre e torcedor do Grêmio desde que se conhece como gente. Sempre gostei de mexer com computadores, jogar videogame, jogar futebol, assistir filmes e séries, e recentemente começou a tomar gosto por cozinhar.</p>
                                                    </div>
                                                </div>
                                                <div class="wrapper p3">
                                                    <figure class="img-indent"><img src="images/natalia.jpg" class="img-circle" style="height:170px; width:170px;margin-top: 21px;" alt="" /></figure>
                                                    <div class="extra-wrap">
                                                        <p align="justify" style="margin-top: 20px;">Natália Menezello, 22 anos, uma campineira apaixonada por arte, seja isso em música, filmes, fotografias ou gastronomia. A facilidade na área de logística sempre foi clara, mas somente após explorar o meu lado criativo, cursando publicidade e propaganda, descobri que minha paixão estava para o outro lado. Meus hobbies são tocar diversos instrumentos (principalmente de cordas) e cantar, assistir filmes e séries, sem contar com as horas jogando vídeo game desde pequena e também a paixão pelo handball.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-2">
                                    <h3 class="border-bot">Comentários</h3>
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
                                    </div>
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
