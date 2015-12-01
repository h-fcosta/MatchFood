<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('../actions/connect.php');
        ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MatchFood - Painel do Administrador</title>

        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>


        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">MatchFood</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <!--a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Read All New Messages</a>
                            </li>
                        </ul-->
                    </li>
                    <li class="dropdown">
                        <!--a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul-->
                    </li>
                    <li class="dropdown">
                        <a href="#"><strong style="color: white;"><i class="fa fa-user"></i> Administrador</strong></a>
                        <!--ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul-->
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Inserção</a>
                        </li>
                        <li class="active">
                            <a href="listaRecUsr.php"><i class="fa fa-fw fa-bar-chart-o"></i> Lista Receitas e Usuários</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Painel do Administrador <small>Edição</small>
                            </h1>

                        </div>
                    </div>
                    <form action='editar.php' method="post" enctype="multipart/form-data">
                        <table class="table">
                            <?php
                            $idE = $_GET['id'];
                            $query_e = mysqli_query($link, "SELECT * FROM receitas where idReceitas='$idE'");

                            while ($edit = mysqli_fetch_array($query_e)) {
                                $foto = $edit['Foto'];
                                $id = $edit['idReceitas'];
                                $nome = $edit['NomeRec'];
                                $tipo = $edit['Tipo'];
                                $origem = $edit['Origem'];
                                $tempo = $edit['Tempo'];
                                $rend = $edit['Rendimento'];
                                $ingredientes = $edit['Ingredientes'];
                                $modo = $edit['Modo'];
                                $tag1 = $edit['Tag1'];
                                $tag2 = $edit['Tag2'];
                                $tag3 = $edit['Tag3'];
                                $tag4 = $edit['Tag4'];
                                $tag5 = $edit['Tag5'];
                                $tag6 = $edit['Tag6'];
                                $tag7 = $edit['Tag7'];
                                $tag8 = $edit['Tag8'];
                                $tag9 = $edit['Tag9'];
                                $tag10 = $edit['Tag10'];
                            }
                            echo '<tr>
                              <td>
                              Foto
                              </td>
                              <td>
                              <input name="foto" type="file"><a href="' . $foto . '" target="_blank"><img src="' . $foto . '" width="100px"/></a>
                              </td>
                              </tr>
                            <input type="text" name="id" value="' . $id . '" style="visibility: hidden; height:0px; width:0px;">
                                <tr>
                                <td>
                                    Nome da Receita
                                </td>
                                <td >
                                    <input type="text" name="nomeRec" class="form-control" value="' . $nome . '" style="width: 75%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tipo
                                </td>
                                <td >
                                    <input type="text" name="tipo" class="form-control" value="' . $tipo . '" style="width: 75%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Origem
                                </td>
                                <td >
                                    <input type="text" name="origem" class="form-control" value="' . $origem . '" style="width: 75%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tempo
                                </td>
                                <td >
                                    <input type="text" name="tempo" class="form-control" value="' . $tempo . '" style="width: 75%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Rendimento
                                </td>
                                <td >
                                    <input type="text" name="rendimento" class="form-control" value="' . $rend . '"  style="width: 75%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ingredientes
                                </td>
                                <td>
                                    <textarea name="ingredientes" id="ingredientes">' . $ingredientes . '</textarea>
                                    <script>
                                        CKEDITOR.replace(\'ingredientes\');
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Modo de Fazer
                                </td>
                                <td>
                                    <textarea name="modo" id="modo">' . $modo . '</textarea>
                                    <script>
                                        CKEDITOR.replace(\'modo\');
                                    </script>
                                </td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td class="tags">
                                    Tag 1
                                </td>
                                <td>
                                    <input type="text" name="tag1" class="form-control" value="' . $tag1 . '" >
                                </td>
                                <td class="tags">
                                    Tag 2
                                </td>
                                <td>
                                    <input type="text" name="tag2" class="form-control" value="' . $tag2 . '">
                                </td>
                                <td class="tags">
                                    Tag 3
                                </td>
                                <td>
                                    <input type="text" name="tag3" class="form-control" value="' . $tag3 . '">
                                </td>
                                <td class="tags">
                                    Tag 4
                                </td>
                                <td>
                                    <input type="text" name="tag4" class="form-control" value="' . $tag4 . '">
                                </td>
                                <td class="tags">
                                    Tag 5
                                </td>
                                <td>
                                    <input type="text" name="tag5" class="form-control" value="' . $tag5 . '">
                                </td>
                            </tr>
                            <tr>
                                <td class="tags">
                                    Tag 6
                                </td>
                                <td>
                                    <input type="text" name="tag6" class="form-control" value="' . $tag6 . '">
                                </td>
                                <td class="tags">
                                    Tag 7
                                </td>
                                <td>
                                    <input type="text" name="tag7" class="form-control" value="' . $tag7 . '">
                                </td>
                                <td class="tags">
                                    Tag 8
                                </td>
                                <td>
                                    <input type="text" name="tag8" class="form-control" value="' . $tag8 . '">
                                </td>
                                <td class="tags">
                                    Tag 9
                                </td>
                                <td>
                                    <input type="text" name="tag9" class="form-control" value="' . $tag9 . '">
                                </td>
                                <td class="tags">
                                    Tag 10
                                </td>
                                <td>
                                    <input type="text" name="tag10" class="form-control" value="' . $tag10 . '">
                                </td>
                            </tr>
                        </table>';
                            ?>
                            <table>
                                <tr>
                                    <td>
                                    </td>
                                    <td style="padding-left: 683px;">
                                        <button type="submit" class="btn" style="width: 200px;" onclick="return confirm('Deseja alterar as infos da receita?');">Enviar</button>
                                    </td>
                                </tr>
                            </table>
                        </table>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>

    </body>

</html>
