<?php

class Categorias extends Conexao {

    private $idCat;
    private $catNome;

    public function getIdCat() {
        return $this->idCat;
    }

    public function getCatNome() {
        return $this->catNome;
    }

    public function setIdCat($id) {
        $this->idCat = $id;
    }

    public function setCatNome($nome) {
        $this->catNome = $nome;
    }

    public function cadastrar() {
        $pdo = parent::getDataBase();
        $cadastrar = $pdo->prepare("INSERT INTO tblCategorias "
                . " VALUES ('null', '$this->catNome')");
        $cadastrar->execute();

        if ($cadastrar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblCategorias");
        $res = $listar->execute();

        $categorias = [];
        while ($arr = $listar->fetch($res)) {
            $categoria = new Categorias();
            $categoria->setIdCat($arr['idtblCategorias']);
            $categoria->setCatNome($arr['tblCategoriasNome']);

            array_push($categorias, $categoria);
        }

        return $categorias;
    }

    public function atualizar() {
        $pdo = parent::getDataBase();
        $atualizar = $pdo->prepare("UPDATE tblCategorias SET tblCategoriasNome='$this->catNome' WHERE idtblCategorias=$this->idCat");
        $atualizar->execute();
        if ($atualizar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function deletar($id) {
        $pdo = parent::getDataBase();
        $excluir = $pdo->prepare("delete from tblCategorias where idtblCategorias = :id");
        $excluir->bindParam(':id', $id);
        $excluir->execute();
        if ($excluir->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function listarCategoria($id) {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblCategorias WHERE idtblCategorias = {$id} ");
        $res = $listar->execute();

        $categoria = new Categorias();
        while ($arr = $listar->fetch($res)) {
            $categoria->setIdCat($arr['idtblCategorias']);
            $categoria->setCatNome($arr['tblCategoriasNome']);
        }

        return $categoria;
    }

}
