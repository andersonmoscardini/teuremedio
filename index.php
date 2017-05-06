<?php
session_start();
?>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Acesso ao Painel de Controle</title>
<meta name="description" content="">
<!-- Bootstrap Core CSS -->
<link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="views/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <h3 class="" style="text-align: center;">Encontre o seu remédio pelo melhor preço</h3>
    <form class="form-horizontal" action="views/busca.php?op=buscaproduto" method="post">
        <div class="form-group">
                <div class="col-sm-4 col-md-4 col-md-offset-3">
                    <input type="text" placeholder="Nome remédio" class="form-control" name="nomeremedio" id="nomeremedio">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success">Pesquisar</button>
                </div>
        </div>
    </form>
</div>

<!-- jQuery -->
<script src="views/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="views/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="views/dist/js/sb-admin-2.js"></script>

<script src="public/js/custom.js"></script>
</body>
</html>
