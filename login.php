<html lang="pt-br">
        <head>
            <meta charset="utf-8"/>
            <title>Acesso ao Painel de Controle</title>
            <meta name="description" content="">
            <!-- Bootstrap Core CSS -->
            <link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- MetisMenu CSS -->
            <link href="views/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="views/dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="views/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: center;">Painel de Acesso</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" action="verificalogin.php">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Login" name="login" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="senha" type="password" required>
                                        </div>
                                        <input type="submit" class="btn btn-lg btn-success btn-block" name="ok" value="Login">
                                    </fieldset>
                                </form>
                                <div style="text-align: center;color: red;">
                                    <?php
                                    echo isset($erro) ? $erro : '';
                                    ?>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="views/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="views/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="views/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="views/dist/js/sb-admin-2.js"></script>
    </body>
</html>
