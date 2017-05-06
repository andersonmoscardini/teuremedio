<?php
session_start();
require '../model/Conexao.php';
require '../model/Sessao.php';

if ((!isset($_SESSION['administrador']) == true) and ( !isset($_SESSION['logado']) == true)) {
    Sessao::deslogar();
}

$logado = $_SESSION['administrador'];
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Teu Remédio</title>
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="./vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
