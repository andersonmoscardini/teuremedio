<?php
session_start();
require_once '../../classes/Conexao.php';
require_once '../../model/Clientes.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $cnpj = $_GET['cnpj'];
    $razao = $_GET['razao'];
    $endereco = $_GET['endereco'];
    $complemento = $_GET['complemento'];
    $cep = $_GET['cep'];
    $telefone = $_GET['telefone'];
    $web = $_GET['web'];

    $atualizar = new Clientes;
    $atualizar->setId($id);
    $atualizar->setNome($nome);
    $atualizar->setCnpj($cnpj);
    $atualizar->setRazao($razao);
    $atualizar->setEndereco($endereco);
    $atualizar->setComplemento($complemento);
    $atualizar->setCep($cep);
    $atualizar->setTelefone($telefone);
    $atualizar->setWeb($web);
    $atualiza = $atualizar->atualizar();
}
//verifica a session
if (isset($_SESSION['logado'])) {
    require_once '../../control/VerificaSessao.php';
} else {
    header("Location: ../../index.php?$erro= Você não tem acesso");
}
?>