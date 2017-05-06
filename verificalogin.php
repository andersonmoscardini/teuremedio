<?php
session_start();
include_once './model/Conexao.php';
include_once './model/Sessao.php';

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sessao = new Sessao();
$sessao->setLogin($login);
$sessao->setSenha($senha);


if ($sessao->logar()) {
    header('location:views/sistema.php');
} else {
    $sessao->deslogar();
    header('location:login.php');
}
?>