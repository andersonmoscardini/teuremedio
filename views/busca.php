<?php
require_once "../model/Conexao.php";
require_once '../model/Produtos.php';
include_once('../control/controladora.php');
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Seja Bem-Vindo ao nosso Painel</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="wrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Lista de Produtos
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php if($produtos){ ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Laboratório</th>
                                                <th>Acesso</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($produtos as $produto): ?>
                                                <tr>
                                                    <td><?= $produto->getNome() ?></td>
                                                    <td><?= $produto->getLaboratorio() ?></td>
                                                    <td style="text-align: center;">
                                                        <a href="#" target="_blank" class="btn btn-success">Ver oferta</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <a href="../" class="btn btn-danger" style="float: right">Voltar</a>
                                </div>
                                <!-- /.table-responsive -->
                                <?php } else { ?>
                                    <p class="alert alert-success">Nenhum produto encontrado :(</p>
                                    
                                    <a href="../" class="btn btn-danger" style="float: right">Voltar</a>
                                <?php } ?>
                            </div>
                            <!-- /.panel-body -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
