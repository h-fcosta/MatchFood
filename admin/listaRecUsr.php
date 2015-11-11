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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
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
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
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
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                        <ul class="dropdown-menu">
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
                                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Inserção</a>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Lista Receitas e Usuários</a>
                        </li>                         
                        <li>
                            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Lista de Usuários</a>
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
                                Painel do Administrador <small>Lista Receitas e Usuários</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> Lista de Receitas e Usuários
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <table class="table table-striped">
                            <tr align="center">
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>ID
                                </td>
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>Receita
                                </td>
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>Editar/Excluir</b>
                                </td>
                            </tr>
                            <?php
                            $query_l = mysqli_query($link, "SELECT idReceitas,nomeRec FROM receitas");

                            while ($lista = mysqli_fetch_array($query_l)) {
                                $idR = $lista['idReceitas'];
                                $nomeLista = $lista['nomeRec'];

                                echo '<tr>
                                    <td>' . $idR . '</td>
                                <td>' . $nomeLista . '</td>
                                    <td style="padding-left: 48px;">
                                    <a href="editarRec.php?id=' . $idR . '"><img src="../images/editar.png" alt="Editar Receita"></a>
                                    <a href="excluirRec.php?id=' . $idR . '" onclick="return confirm(\'Deseja excluir a receita selecionada?\'); location.reload();"><img src="../images/excluir.png" alt="Excluir Receita"></a>
                                </td>
                                </tr>';
                            }
                            ?>
                        </table>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <tr align="center">
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>ID
                                </td>
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>Nome
                                </td>
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>Email
                                </td>
                                <td style="box-shadow: #ccc -3px 4px 8px;">
                                    <b>Editar/Excluir</b>
                                </td>
                            </tr>
                            <?php
                            $query_l = mysqli_query($link, "SELECT idUsuario, Nome, Email FROM usuario");

                            while ($lista = mysqli_fetch_array($query_l)) {
                                $idU = $lista['idUsuario'];
                                $nome = $lista['Nome'];
                                $email = $lista['Email'];

                                echo '<tr>
                                <td>' . $idU . '</td>
                                
                                
                                <td>' . $nome . '</td>
                                
                                
                                <td>' . $email . '</td>
                                    <td style="padding-left: 30px;">
                                    <img src="../images/editar.png" alt="Editar Receita"></a>
                                    <a href="excluirUsr.php?id=' . $idU . '"><img src="../images/excluir.png" alt="Excluir Receita"></a>
                                </td>
                                </tr>';
                            }
                            ?>
                        </table>
                    </div>
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