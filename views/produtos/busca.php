<?php
session_start();
require_once '../../classes/Conexao.php';
require_once '../../model/Produtos.php';
?>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8"/>
            <title>Seja Bem-Vindo ao nosso Painel</title>
            <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        </head>
        <body>

            <div id="wrapper">

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Lista de Produtos Cadastrados
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Produto</th>
                                                <th>Laboratorio</th>
                                                <th>Acesso</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if(isset($_POST["nomeremedio"])) {
                                                    $param = $_POST["nomeremedio"];
                                                    $produto = new Produtos;
                                                    $produtos = $produto->buscar($param);
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </form>
                                    <a href="../../index.php" class="btn btn-danger" style="float: right">Voltar</a>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
