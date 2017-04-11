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
        $cliente->setCnpj($_POST['cnpj']);
        $cliente->setRazao($_POST['razao']);
        $cliente->setEndereco($_POST['endereco']);
        $cliente->setComplemento($_POST['complemento']);
        $cliente->setCep($_POST['cep']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setWeb($_POST['web']);

        $cadastro = $cliente->cadastrar();
        include_once('./clientes/cadastro.php');
        break;

    case 'clientesfrmedita':
        include_once '../model/Conexao.php';
        include_once '../model/Clientes.php';

        $cliente = new Clientes;
        $cliente = $cliente->listarCliente($_POST['id']);
        include_once('./clientes/atualizar.php');
        break;

    case 'clientesedita':
        include_once '../model/Conexao.php';
        include_once '../model/Clientes.php';

        $cliente = new Clientes;
        $cliente->setId($_POST['id']);
        $cliente->setNome($_POST['nome']);
        $cliente->setCnpj($_POST['cnpj']);
        $cliente->setRazao($_POST['razao']);
        $cliente->setEndereco($_POST['endereco']);
        $cliente->setComplemento($_POST['complemento']);
        $cliente->setCep($_POST['cep']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setWeb($_POST['web']);

        $cadastro = $cliente->atualizar();
        include_once('./clientes/atualizar.php');
        break;

    case 'clientesexclui':
        include_once '../model/Conexao.php';
        include_once '../model/Clientes.php';

        $cliente = new Clientes;
        $cadastro = $cliente->deletar($_POST["id"]);

        $clientes = $cliente->listar();
        include_once('./clientes/listagem.php');
        break;
    
    case 'categoriaslistagem':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';

        $categoria = new Categorias;
        $categorias = $categoria->listar();

        include_once('./categorias/listagem.php');
        break;
    
    case 'categoriasfrmcadastro':
        include_once('./categorias/cadastro.php');
        break;

    case 'categoriascadastro':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';

        $categoria = new Categorias;
        $categoria->setCatNome($_POST['nome']);

        $cadastro = $categoria->cadastrar();
        include_once('./categorias/cadastro.php');
        break;
    
    case 'categoriasfrmedita':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';

        $categoria = new Categorias;
        $categoria = $categoria->listarCategoria($_POST['id']);
        include_once('./categorias/atualizar.php');
        break;
    
    case 'categoriasedita':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';

        $categoria = new Categorias;
        $categoria->setIdCat($_POST['id']);
        $categoria->setCatNome($_POST['nome']);

        $cadastro = $categoria->atualizar();
        include_once('./categorias/atualizar.php');
        break;
    
    case 'categoriasexclui':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';

        $categoria = new Categorias;
        $cadastro = $categoria->deletar($_POST["id"]);
        $categorias = $categoria->listar();
        include_once('./categorias/listagem.php');
        break;
}
