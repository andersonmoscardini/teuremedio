<?php

class Clientes extends Conexao {

    private $id;
    private $nome;
    private $cnpj;
    private $razao;
    private $endereco;
    private $complemento;
    private $cep;
    private $telefone;
    private $web;


    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getRazao() {
        return $this->razao;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getWeb() {
        return $this->web;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setRazao($razao) {
        $this->razao = $razao;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setWeb($web) {
        $this->web = $web;
    }




    public function cadastrar() {
        $pdo = parent::getDataBase();
        $cadastrar = $pdo->prepare("INSERT INTO tblClientes  VALUES ('null', "
        . "'$this->nome',"
        . "'$this->cnpj',"
        . "'$this->razao',"
        . "'$this->endereco',"
        . "'$this->complemento',"
        . "'$this->cep',"
        . "'$this->telefone',"
        . "'$this->web')");

        $cadastrar->execute();
        if ($cadastrar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblClientes");
        $res = $listar->execute();

        $clientes = [];
        while($arr = $listar->fetch($res))
        {
            $cliente = new Clientes();
            $cliente->setId($arr['idtblClientes']);
            $cliente->setNome($arr['tblClientesNome']);
            $cliente->setCnpj($arr['tblClientesCnpj']);
            $cliente->setRazao($arr['tblClientesRazao']);
            $cliente->setEndereco($arr['tblClientesEndereco']);
            $cliente->setCep($arr['tblClientesCep']);
            $cliente->setTelefone($arr['tblClientesTelefone']);
            $cliente->setWeb($arr['tblClientesWeb']);
            array_push($clientes, $cliente);
        }

        return $clientes;
    }

    public function listarCliente($id) {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblClientes WHERE idtblClientes = " . $id . "");
        $res = $listar->execute();

        $cliente = new Clientes();
        while($arr = $listar->fetch($res))
        {
            $cliente->setId($arr['idtblClientes']);
            $cliente->setNome($arr['tblClientesNome']);
            $cliente->setCnpj($arr['tblClientesCnpj']);
            $cliente->setRazao($arr['tblClientesRazao']);
            $cliente->setEndereco($arr['tblClientesEndereco']);
            $cliente->setCep($arr['tblClientesCep']);
            $cliente->setTelefone($arr['tblClientesTelefone']);
            $cliente->setWeb($arr['tblClientesWeb']);
        }

        return $cliente;
    }

    public function atualizar(){
        $pdo = parent::getDataBase();
        $atualizar = $pdo->prepare("UPDATE tblClientes SET "
        . "tblClientesNome='$this->nome',"
        . "tblClientesCnpj='$this->cnpj',"
        . "tblClientesRazao='$this->razao',"
        . "tblClientesEndereco='$this->endereco',"
        . "tblClientesComplemento='$this->complemento',"
        . "tblClientesCep='$this->cep',"
        . "tblClientesTelefone='$this->telefone',"
        . "tblClientesWeb='$this->web'"
        . " WHERE idtblClientes=$this->id");
        $atualizar->execute();
        if ($atualizar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function deletar($id){
        $pdo = parent::getDataBase();
        $excluir = $pdo->prepare("DELETE from tblClientes WHERE idtblClientes = :id");
        $excluir->bindParam(':id', $id);
        $excluir->execute();
        if ($excluir->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    /*
    public function listarclientes() {
    $pdo = parent::getDataBase();
    $listar = $pdo->prepare("SELECT * FROM tblClientes");
    $res = $listar->execute();
    $num = $listar->rowCount($res);
    if ($num > 0) {
    for ($i = 0; $i < $num; $i++) {
    $arr = $listar->fetch($res);
    echo '<option value="'. $arr['idtblClientes'] .'">'. $arr['tblClientesNome'] .'</option>';
}
}
}*/
}
