<?php

switch(@$_GET["op"]){
    case 'clienteslistagem':
        include_once '../model/Conexao.php';
        include_once '../model/Clientes.php';

        $cliente = new Clientes;
        $clientes = $cliente->listar();

        include_once('./clientes/listagem.php');
        break;

    case 'clientesfrmcadastro':
        include_once('./clientes/cadastro.php');
        break;

    case 'clientescadastro':
        include_once '../model/Conexao.php';
        include_once '../model/Clientes.php';

        $cliente = new Clientes;
        $cliente->setNome($_POST['nome']);
        $cliente->setCnpj($cnpj);
        $cliente->setRazao($razao);
        $cliente->setEndereco($endereco);
        $cliente->setComplemento($complemento);
        $cliente->setCep($cep);
        $cliente->setTelefone($telefone);
        $cliente->setWeb($web);
        $cadastrar = $cliente->cadastrar();
        break;
}

?>
