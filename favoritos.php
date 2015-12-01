<!DOCTYPE html>
<?php
include 'actions/connect.php';
include 'actions/sessao.php';
?>
<html lang="en">
    <head>
        <title>MatchFood - Seus Favoritos</title>

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
    <body id="page5">
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
                        if ($status != null) {
                            echo'<div class="main-menu-log">
                            <nav>
                                <ul class="menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="sobre.php">Sobre Nós</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                    <li><a class="active" href="favoritos.php">Favoritos</a></li>
                                    <li><a href="actions/logout.php">Bem vindo! Sair</a></li>';
                        } else {
                            echo '<div class="main-menu">
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="sobre.php">Sobre Nós</a></li>
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
                                    <div class="bg">
                                        <?php
                                        $query_fav = mysqli_query($link, "SELECT receitas.idReceitas, receitas.Foto, receitas.NomeRec, receitas.Tipo,
                                                                        receitas.Origem from Receitas join Favoritos on favoritos.receitas_idreceitas = receitas.idReceitas where 
                                                                        favoritos.usuario_idusuario = $loginSession;");
                                        $num = mysqli_num_rows($query_fav);

                                        if ($num > 0) {

                                            echo '<div class="padding">
                                            <h3 class="p2">Seus Favoritos:</h3>';

                                            while ($fav = mysqli_fetch_assoc($query_fav)) {
                                                echo '<div class="wrapper p3">
                                                <figure class="img-indent"><img src="admin/' . $fav['Foto'] . '" style="width:200px; height:166px;" " alt="' . $fav['NomeRec'] . '" /></figure>
                                                <div class="extra-wrap">
                                                    <h6>' . $fav['NomeRec'] . '</h6>
                                                    <p class="p1">' . utf8_encode($fav['Tipo'])  . '</p>
                                                    <p class="p1">' . utf8_encode($fav['Origem']) . '</p>
                                                    <a class="button-2" href="receita.php?id=' . $fav['idReceitas'] . '">Ver Receita</a>
                                                </div>
                                            </div>';
                                            }
                                            echo '</div>';
                                        } else {
                                            echo '<div class="padding">
                                            <h3 class="p2">Seus Favoritos:</h3>
                                            <div class="wrapper p3">
                                                <div class="extra-wrap">
                                                    Tá esperando o que? Desbrave o site e salve suas receitas favoritas AGORA!
                                                </div>
                                            </div>                                           
                                            </div>';
                                        }
                                        ?>
                                    </div>
                                </article>
                                <article class="col-2">
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