<!DOCTYPE html>
<html lang="en">
    <?php
    include ("actions/connect.php");

    @$cons = $_GET['s'];
    ?>
    <head>
        <title>MatchFood - Resultado da sua busca</title>

        <link rel="icon" href="images/teste.png" type="image/png" >

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

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
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script-->

        <script src="scripts/js.js" type="text/javascript"></script>
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
                    <?php
                    @session_start();
                    @$status = $_SESSION['logado'];

                    if ($status != null) {
                        echo'<div class="main-menu-log">
                            <nav>
                                <ul class="menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="sobre.php">Sobre Nós</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
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
                                            <h3 class="p2 border-bot">O que procuro:</h3>
                                            <?php
                                            if ($cons == "") {
                                                echo '<h2>Busca inválida. Tente novamente.</h2>';
                                            } else {
                                                $count = mysqli_query($link, "SELECT COUNT(idReceitas) FROM receitas");
                                                $row = mysqli_fetch_row($count);
                                                $rows = $row[0];
                                                $page_rows = 10;

                                                $ult = ceil($rows / $page_rows);

                                                if ($ult < 1) {
                                                    $ult = 1;
                                                }

                                                $pageNum = 1;

                                                if (isset($_GET['p'])) {
                                                    $pageNum = preg_replace('#[^0-9]#', '', $_GET['p']);
                                                }

                                                if ($pageNum < 1) {
                                                    $pageNum = 1;
                                                } else
                                                if ($pageNum > $ult) {
                                                    $pageNum = $ult;
                                                }

                                                $limite = ' LIMIT ' . ($pageNum - 1) * $page_rows . ',' . $page_rows;

                                                $sql = 'SELECT * FROM receitas WHERE ';
                                                foreach (explode(" ", $cons) as $keyword) {
                                                    for ($i = 1; $i <= 10; $i++) {
                                                        $where [] = 'tag' . $i . " LIKE '%" . $keyword . "%'";
                                                    }
                                                }

                                                $sql .= implode(" or ", $where);

                                                $sql .= $limite;

                                                $query = mysqli_query($link, $sql);

                                                $primPag = "";
                                                $pags = "Página $pageNum de $ult";

                                                $paginationCtrls = '';

                                                if ($ult != 1) {
                                                    if ($pageNum >= 1) {
                                                        $anterior = $pageNum - 1;
                                                        $paginationCtrls .= '<a href="pesquisa.php?s=' . $cons . '&p=' . $anterior . '">Anterior</a>  ';
                                                        for ($i = $pageNum - 4; $i < $pageNum; $i++) {
                                                            if ($i > 0) {
                                                                $paginationCtrls .= '<a href="pesquisa.php?s=' . $cons . '&p=' . $i . '"> ' . $i . ' </a>';
                                                            }
                                                        }
                                                    }
                                                    $paginationCtrls .= '' . $pageNum . ' ';
                                                    for ($i = $pageNum + 1; $i <= $ult; $i++) {
                                                        $paginationCtrls .= '<a href="pesquisa.php?s=' . $cons . '&p=' . $i . '"> ' . $i . ' </a>';
                                                        if ($i >= $pageNum + 4) {
                                                            break;
                                                        }
                                                    }

                                                    if ($pageNum == $ult) {
                                                        $prox = $pageNum + 1;
                                                        $paginationCtrls .= '  <a href="pesquisa.php?s=' . $cons . '&p=' . $prox . '">Próximo</a>';
                                                    }
                                                }

                                                while ($info = mysqli_fetch_assoc($query)) {
                                                    $idRec = $info['idReceitas'];
                                                    $foto = $info['Foto'];
                                                    $nome = $info['NomeRec'];
                                                    $tipo = $info['Tipo'];
                                                    $origem = $info['Origem'];

                                                    echo '<div class="wrapper p3">
                                                <figure class="img-indent"><img src="admin/' . $foto . '" style="width:200px; height:166px;" alt="" /></figure>
                                                <div class="extra-wrap">
                                                    <h6>' . $nome . '</h6>
                                                    <p class="p1">' . $tipo . '<br>
                                                        ' . $origem . '</p>
                                                    <a class="button-2" href="receita.php?id=' . $idRec . '">Ver Receita</a>
                                                </div>
                                            </div>';
                                                }
                                                echo '<div align="center">
                                                        ' . $paginationCtrls . '
                                                            <h2>' . $pags . '</h2>
                                                 </div>';
                                            }
                                            ?>
                                        </div>
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

