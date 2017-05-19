<?php

include_once 'Categorias.php';
include_once 'Clientes.php';

class Produtos extends Conexao {

    private $id;
    private $nome;
    private $laboratorio;
    private $categoria;
    private $cliente;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLaboratorio() {
        return $this->laboratorio;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setLaboratorio($laboratorio) {
        $this->laboratorio = $laboratorio;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function cadastrar() {
        $pdo = parent::getDataBase();
        $cadastrar = $pdo->prepare("INSERT INTO tblProdutos  VALUES ('null', "
                . "'$this->nome', "
                . "'$this->laboratorio', "
                . $this->categoria->getIdCat() . ", "
                . $this->cliente->getId() . ")");
        $cadastrar->execute();

        if ($cadastrar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblProdutos "
                . "INNER JOIN tblcategorias ON tblCategorias_idtblCategorias = idtblCategorias "
                . "INNER JOIN tblclientes ON tblClientes_idtblClientes = idtblClientes");
        $res = $listar->execute();

        $produtos = [];
        while ($arr = $listar->fetch($res)) {
            //print_r($arr);
            $produto = new Produtos();
            $categoria = new Categorias();
            $cliente = new Clientes();
            $produto->setId($arr['idtblProdutos']);
            $produto->setNome($arr['tblProdutosNome']);
            $produto->setLaboratorio($arr['tblProdutosLaboratorio']);

            $categoria->setIdCat($arr['idtblCategorias']);
            $categoria->setCatNome($arr['tblCategoriasNome']);
            $cliente->setId($arr['idtblClientes']);
            $cliente->setNome($arr['tblClientesNome']);

            $produto->setCategoria($categoria);
            $produto->setCliente($cliente);

            array_push($produtos, $produto);
        }
        return $produtos;
    }

    public function listarProduto($id) {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblProdutos "
                . "INNER JOIN tblcategorias ON tblCategorias_idtblCategorias = idtblCategorias "
                . "INNER JOIN tblclientes ON tblClientes_idtblClientes = idtblClientes");
        $res = $listar->execute();

        $produto = new Produtos();
        while ($arr = $listar->fetch($res)) {

            $categoria = new Categorias();
            $cliente = new Clientes();
            $produto->setId($arr['idtblProdutos']);
            $produto->setNome($arr['tblProdutosNome']);
            $produto->setLaboratorio($arr['tblProdutosLaboratorio']);

            $categoria->setIdCat($arr['idtblCategorias']);
            $categoria->setCatNome($arr['tblCategoriasNome']);
            $cliente->setId($arr['idtblClientes']);
            $cliente->setNome($arr['tblClientesNome']);

            $produto->setCategoria($categoria);
            $produto->setCliente($cliente);
        }
        //var_dump($produto);
        return $produto;
    }

    public function atualizar() {
        $pdo = parent::getDataBase();
        $atualizar = $pdo->prepare("UPDATE tblProdutos SET "
                . "tblProdutosNome='$this->nome', "
                . "tblProdutosLaboratorio='$this->laboratorio', "
                . "tblCategorias_idtblCategorias=" . $this->categoria->getIdCat() . ", "
                . "tblClientes_idtblClientes=" . $this->cliente->getId() . " "
                . "WHERE idtblProdutos=$this->id");
        $atualizar->execute();

        if ($atualizar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function deletar($id) {
        $pdo = parent::getDataBase();
        $excluir = $pdo->prepare("DELETE FROM tblProdutos WHERE idtblProdutos = :id");
        $excluir->bindParam(':id', $id);
        $excluir->execute();
        if ($excluir->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarProduto($nome) {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblProdutos " .
        "INNER JOIN tblclientes ON tblClientes_idtblClientes = idtblClientes " .
        "WHERE tblProdutosNome LIKE '%". $nome . "%'");
        $res = $listar->execute();

        $produtos = [];
        $produto = new Produtos();
        $cliente = new Clientes();
        while ($arr = $listar->fetch($res)) {
            $produto->setId($arr['idtblProdutos']);
            $produto->setNome($arr['tblProdutosNome']);
            $produto->setLaboratorio($arr['tblProdutosLaboratorio']);

            $cliente->setNome($arr['tblClientesNome']);

            $produto->setCliente($cliente);

            array_push($produtos, $produto);
        }
        //var_dump($produtos);
        return $produtos;
    }

}
