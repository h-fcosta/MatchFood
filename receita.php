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

        echo '<title>' . $titulo . '</title>';
        ?>
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
    </head>

    <body id="page2">
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
                                    <li><a href="index.html">Home</a></li>
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
                                        <p>' . $ingredientes .
                                        /* - 500 g de massa de lasanha
                                          <br>- 500 g de carne moida
                                          <br>- 2 caixas creme de leite
                                          <br>- 2 ou 3 colheres de manteiga
                                          <br>- 2 a 3 colheres de farinha de trigo
                                          <br>- 500 g de presunto
                                          <br>- 500 g de mussarela
                                          <br>- Sal a gosto
                                          <br>- 2 copos de leite (mais ou menos)
                                          <br>- 1 cebola ralada
                                          <br>- 3 colheres de óleo
                                          <br>- 3 dentinhos de alho amassados
                                          <br>- 1 pacotinho de queijo ralado */ ' 
                                        </p>
                                    </div>
                                    <div class="bg">
                                        <div class="padding">
                                            <h3>Modo de Preparo:</h3>
                                            <p align="justify" class="p1">'
                                        . $modo .
                                        /* <b>1.</b> Cozinhe massa al dente, após cozido passe um pouco de manteiga para que não grude (reserve).
                                          <br><b>2.</b> Existem massas que não precisam de cozimento

                                          <br><br><b>Molho à bolonhesa:</b>
                                          <br><b>1.</b> Refogue o alho, a cebola, a carne moída, depois acrescente o molho de tomate, deixe cozinhar por 3 minutos, reserve.

                                          <br><br><b>Molho branco:</b>
                                          <br><b>1.</b> Derreta a margarina, coloque as 3 colheres de farinha de trigo e mexa.
                                          <br><b>2.</b> Depois coloque o leite aos poucos e continue mexendo, por último coloque o creme de leite e dê mais uma mexida e desligue.

                                          <br><br><b>Montagem:</b>
                                          <br><b>1.</b> Em uma forma coloque no fundo um pouco de molho à bolonhesa, a metade da massa, a metade do presunto, a metade da mussarela, todo o molho branco, o restante do massa, o restante do presunto, o restante da mussarela, o restante do molho à bolonhesa e por último salpique com queijo ralado.
                                          <br><b>2.</b> Levar ao forno para gratinar e depois é só saborear. Hmmm! */' 
                                            </p>
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
