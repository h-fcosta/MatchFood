<!DOCTYPE html>
<html lang="en">
    <?php
    include ("connect.php");
    ?>
    <head>
        <?php
        @$idT = $_GET['id'];
        $t = mysqli_query($link, "SELECT NomeRec FROM receitas WHERE idReceitas = $idT;");
        while ($title = mysqli_fetch_array($t)) {
            $titulo = $title['NomeRec'];
        }

        echo '<title>MatchFood - ' . $titulo . '</title>';
        ?>
        <meta charset="utf-8">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <link rel="icon" href="images/teste.png" type="image/png" >
        
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
                                    <li><a href="sobre.php">Sobre Nós</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                    <li><a href="logout.php">Bem vindo! Sair</a></li>';
                        } else {
                            echo '<div class="main-menu">
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
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
                                    <div class="indent-left">  
                                        <?php
                                        @$id = $_GET['id'];
                                        $query = mysqli_query($link, "SELECT Foto, NomeRec, Tipo, Origem, Ingredientes, Modo, Tempo, Rendimento FROM receitas where idReceitas = '$id';");

                                        while ($info = mysqli_fetch_array($query)) {
                                            $foto = $info['Foto'];
                                            $nome = $info['NomeRec'];
                                            $tipo = $info['Tipo'];
                                            $origem = $info['Origem'];
                                            $ingredientes = $info['Ingredientes'];
                                            $modo = $info['Modo'];
                                            $tempo = $info['Tempo'];
                                            $rendimento = $info['Rendimento'];
                                        }
                                        echo '<p align="justify"><h3 class="border-bot">' . $nome . '</h3>

                                        <div class="wrapper p3">
                                            <figure class="img-indent"><img src="' . $foto . '" style="height:375px; width:640px;" alt="" /></figure>
                                        </div>

                                        <h6>INGREDIENTES: </h6></p>
                                        <p>' . $ingredientes .'</p>
                                    </div>
                                    <div class="bg">
                                        <div class="padding">
                                            <h3>Modo de Preparo:</h3>
                                            <p align="justify" class="p1">'. $modo .'</p>
                                            <div class="wrapper">
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-2">
                                <p>
                                <form action="pesquisa.php" method="get">
                                    <input type="text" name="s" placeholder="Pesquisar" style="width: 150px;"/>
                                    <input type="submit" name="submit" value="Match!" class="button-3"/>
                                </form>
                                </p>
                                    <h3 class="border-bot">Informações:</h3>

                                    <blockquote>Tempo de Preparo</blockquote>
                                    <div>
                                        <strong class="color-3">' . $tempo . '</strong>
                                    </div>
                                    <br> 
                                    <blockquote>Rendimento</blockquote>
                                    <div>
                                        <strong class="color-3">' . $rendimento . '</strong>
                                    </div>

                                    <br> 
                                    <blockquote>Tags</blockquote>
                                    <div>
                                        <strong class="color-3">Italiana, lasanha, carne moída, queijo, massa </strong>
                                    </div>';
                                        ?>
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
                            <li><a class="tooltips" title="facebook" href="https://www.facebook.com/matchfood" target="_blank"></a></li>
                            <li class="item-1"><a class="tooltips" title="twitter" href="https://www.twitter.com/" target="_blank"></a></li>
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
