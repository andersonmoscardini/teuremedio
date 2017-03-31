<?php
session_start();
require_once "../classes/Conexao.php";
require_once "../control/VerificaSessao.php";


if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 'confirmar') {
        VerificaSessao::deslogar();
    }
}

if (isset($_SESSION['logado'])) {
    ?>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8"/>
            <title>Seja Bem-Vindo ao nosso Painel</title>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- MetisMenu CSS -->
            <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Morris Charts CSS -->
            <link href="vendor/morrisjs/morris.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        </head>
        <body>

            <div id="wrapper">

                <!-- Navigation -->
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Painel de Controle</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>

                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i>
                                    <?php echo $_SESSION['administrador']; ?><br /></li>
                                <li class="divider"></li>
                                <li><a href="layout.php?logout=confirmar"><i class="fa fa-sign-out fa-fw"></i>Sair</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                         <?php
                } else {
                    header("Location: ../login.php?$erro= Você não tem acesso");
                }
                ?>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Menu<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Categorias <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="categorias/cadastro.php">Cadastro</a>
                                            </li>
                                            <li>
                                                <a href="categorias/listagem.php">Lista</a>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#">Clientes <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="clientes/cadastro.php">Cadastro</a>
                                            </li>
                                            <li>
                                                <a href="clientes/listagem.php">Lista</a>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#">Produtos <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="produtos/cadastro.php">Cadastro</a>
                                            </li>
                                            <li>
                                                <a href="produtos/listagem.php">Lista</a>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#">Usuarios <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="usuarios/cadastro.php">Cadastro</a>
                                            </li>
                                            <li>
                                                <a href="usuarios/listagem.php">Lista</a>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">

                <div class="row">

                    <div class="col-lg-3 col-md-6">

                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="vendor/raphael/raphael.min.js"></script>
        <script src="vendor/morrisjs/morris.min.js"></script>
        <script src="data/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>

    </body>

</html>
