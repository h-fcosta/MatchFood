﻿<!DOCTYPE html>
<html lang="en">
    <?php
    include ("connect.php");

    @$cons = $_GET['s'];
    ?>
    <head>
        <title>Resultado da sua busca</title>
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="sobre.php">Sobre Nós</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                    <li class="last"><a href="cadastro.php">Cadastre-se</a></li>

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
                                                $sql = 'SELECT * FROM receitas WHERE ';
                                                foreach (array_filter(explode(" ", $cons), 'strlen') as $keyword) {
                                                    for ($i = 1; $i <= 10; $i++) {
                                                        $where [] = 'tag' . $i . " LIKE '" . mysqli_escape_string($link, '%' . addcslashes($keyword, '%_\\') . '%') . "'";
                                                    }
                                                }

                                                $sql .= implode(" or ", $where);

                                                $query = mysqli_query($link, $sql);

                                                while ($info = mysqli_fetch_assoc($query)) {
                                                    echo '<div class="wrapper p3">
                                                <figure class="img-indent"><img src="' . $info['Foto'] . '" style="width:200px; height:166px;" alt="" /></figure>
                                                <div class="extra-wrap">
                                                    <h6>' . $info['NomeRec'] . '</h6>
                                                    <p class="p1">' . $info['Tipo'] . '<br>
                                                        ' . $info['Origem'] . '</p>
                                                    <a class="button-2" href="receita.php?id=' . $info['idReceitas'] . '">Ver Receita</a>
                                                </div>
                                            </div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </article>
                                <p>
                                <form action="pesquisa.php" method="get">
                                    <input type="text" name="s" placeholder="Pesquisar" style="width: 150px;" />
                                    <input type="submit" name="submit" value="Match!" class="button-3"/>
                                </form>
                                </p>
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
