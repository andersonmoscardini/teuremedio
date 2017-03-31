<?php
session_start();
require_once '../../classes/Conexao.php';
require_once '../../model/Produtos.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $laboratorio = $_GET['laboratorio'];
    

    $atualizar = new Produtos;
    $atualizar->setId($id);
    $atualizar->setNome($nome);
    $atualizar->setLaboratorio($laboratorio);
    $atualiza = $atualizar->atualizar();
}
//verifica a session
if (isset($_SESSION['logado'])) {
    require_once '../../control/VerificaSessao.php';
} else {
    header("Location: ../../index.php?$erro= Você não tem acesso");
}
?>