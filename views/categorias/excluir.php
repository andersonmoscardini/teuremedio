<?php
session_start();
require_once '../../classes/Conexao.php';
require_once '../../model/Categorias.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $excluir = new Categorias;
    $excluir->setIdCat($id);
    $delete = $excluir->deletar();
}
//verifica a session
if (isset($_SESSION['logado'])) {
    require_once '../../control/VerificaSessao.php';
} else {
    header("Location: ../../index.php?$erro= Você não tem acesso");
}
?>              