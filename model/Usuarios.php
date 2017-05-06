<?php

class Usuarios extends Conexao {

    private $id;
    private $nome;
    private $email;
    private $senha;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = md5($senha);
    }

    
    public function cadastrar() {
        $pdo = parent::getDataBase();
        $cadastrar = $pdo->prepare("INSERT INTO tblUsuarios  VALUES ('null', '$this->nome', '$this->email', '$this->senha')");
        $cadastrar->execute();
        if ($cadastrar->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblUsuarios");
        $res = $listar->execute();

        $usuarios = [];
        while ($arr = $listar->fetch($res)) {
            $usuario = new Usuarios();
            $usuario->setId($arr['idtblUsuarios']);
            $usuario->setNome($arr['tblUsuariosNome']);
            $usuario->setEmail($arr['tblUsuariosEmail']);

            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }
            
        public function atualizar(){
            $pdo = parent::getDataBase();
            $atualizar = $pdo->prepare("UPDATE tblUsuarios SET "
                    . "tblUsuariosNome='$this->nome', "
                    . "tblUsuariosEmail='$this->email', "
                    . "tblUsuariosSenha='$this->senha' "
                    . "WHERE idtblUsuarios=$this->id");
            $atualizar->execute();
            if ($atualizar->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        }
        
        public function deletar($id){
            $pdo = parent::getDataBase();
            $excluir = $pdo->prepare("delete from tblUsuarios where idtblUsuarios = :id");
            $excluir->bindParam(':id', $id);
            $excluir->execute();
            if ($excluir->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        }
        
        public function listarUsuario($id) {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblUsuarios WHERE idtblUsuarios = {$id} ");
        $res = $listar->execute();

        $usuario = new Usuarios();
        while ($arr = $listar->fetch($res)) {
            $usuario->setId($arr['idtblUsuarios']);
            $usuario->setNome($arr['tblUsuariosNome']);
            $usuario->setEmail($arr['tblUsuariosEmail']);
            $usuario->setSenha($arr['tblUsuariosSenha']);
        }

        return $usuario;
    }
}
