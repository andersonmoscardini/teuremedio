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
    
    case 'produtoslistagem':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';
        include_once '../model/Clientes.php';
        include_once '../model/Produtos.php';

        $produto = new Produtos;
        $produtos = $produto->listar();

        include_once('./produtos/listagem.php');
        break;
    
    case 'produtosfrmcadastro':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';
        include_once '../model/Clientes.php';
        include_once '../model/Produtos.php';
        
        $categoria = new Categorias;
        $categorias = $categoria->listar();

        $cliente = new Clientes;
        $clientes = $cliente->listar();
        
        $produto = new Produtos;
        $produtos = $produto->listar();
        
        include_once('./produtos/cadastro.php');
        break;
    
    case 'produtoscadastro':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';
        include_once '../model/Clientes.php';
        include_once '../model/Produtos.php';

        $produto = new Produtos();
        $categoria = new Categorias();
        $cliente = new Clientes();

        $produto->setNome($_POST['nome']);
        $produto->setLaboratorio($_POST['laboratorio']);
        
        $categoria->setIdCat($_POST['categoria']);
        $cliente->setId($_POST['cliente']);
        
        $produto->setCategoria($categoria);
        $produto->setCliente($cliente);

        $cadastro = $produto->cadastrar();
        include_once('./produtos/cadastro.php');
        break;
    
    case 'produtosfrmedita':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';
        include_once '../model/Clientes.php';
        include_once '../model/Produtos.php';
        
        $categoria = new Categorias;
        $categorias = $categoria->listar();

        $cliente = new Clientes;
        $clientes = $cliente->listar();

        $produto = new Produtos;
        $produto = $produto->listarProduto($_POST['id']);
        //get_object_vars($produto);
        include_once('./produtos/atualizar.php');
        break;
    
    case 'produtosedita':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';
        include_once '../model/Clientes.php';
        include_once '../model/Produtos.php';
        
        $produto = new Produtos();
        $categoria = new Categorias();
        $cliente = new Clientes();
        
        $categorias = $categoria->listar();
        $clientes = $cliente->listar();

        $produto->setId($_POST['id']);
        $produto->setNome($_POST['nome']);
        $produto->setLaboratorio($_POST['laboratorio']);
        
        $categoria->setIdCat($_POST['categoria']);
        $cliente->setId($_POST['cliente']);
        
        $produto->setCategoria($categoria);
        $produto->setCliente($cliente);
        
        $cadastro = $produto->atualizar();
        
        $produto = new Produtos();
        $produto = $produto->listarProduto($_POST['id']);
        include_once('./produtos/atualizar.php');
        
        break;
    
    case 'produtosexclui':
        include_once '../model/Conexao.php';
        include_once '../model/Categorias.php';
        include_once '../model/Clientes.php';
        include_once '../model/Produtos.php';
        
        $produto = new Produtos();
        $cadastro = $produto->deletar($_POST["id"]);
        
        $produtos = $produto->listar();
        include_once('./produtos/listagem.php');
       break;
    
    default :
        echo "Bem vindo!";
        break;
}
