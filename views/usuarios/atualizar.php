<?php
session_start();
require_once '../../classes/Conexao.php';
require_once '../../model/Usuarios.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    $atualizar = new Usuarios;
    $atualizar->setId($id);
    $atualizar->setNome($nome);
    $atualizar->setEmail($email);
    $atualizar->setSenha($senha);
    $atualiza = $atualizar->atualizar();
}
//verifica a session
if (isset($_SESSION['logado'])) {
    require_once '../../control/VerificaSessao.php';
} else {
    header("Location: ../../index.php?$erro= Você não tem acesso");
}
?>