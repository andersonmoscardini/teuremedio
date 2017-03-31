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
        $this->senha = $senha;
    }

    
    public function cadastrar() {
        $pdo = parent::getDataBase();
        $cadastrar = $pdo->prepare("INSERT INTO tblUsuarios  VALUES ('null', '$this->nome', '$this->email', '$this->senha')");
               
        $cadastrar->execute();
        if ($cadastrar->rowCount() == 1) {
            echo("Cadastro realizado com sucesso");
            header("Location: cadastro.php");
            return true;
        } else {
            echo("Houve problemas no cadastro");
            return false;
        }
    }

    public function listar() {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblUsuarios");
        $res = $listar->execute();
        $num = $listar->rowCount($res);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $arr = $listar->fetch($res);
                echo "<form role='form' method='get' action=atualizar.php?>";
                echo '<input name=id type=hidden value='. $arr['idtblUsuarios'] .'>';
                echo "<tr>";
                echo '<td>' . $arr['idtblUsuarios'] .'</td>';
                echo '<td><input name=nome type=text value=' . $arr['tblUsuariosNome'] .'></td>';
                echo '<td><input name=email type=text value=' . $arr['tblUsuariosEmail'] .'></td>';
                echo '<td><input name=senha type=text value=' . $arr['tblUsuariosSenha'] .'></td>';
                echo '<td><input name=alterar type=submit value=Alterar></td>';
                echo '<td><a class=btn href=excluir.php?id='.$arr['idtblUsuarios'].'>Excluir</a></td>';
                echo "</tr>";
                echo "</form>";
            }
        }
    }
            
        public function atualizar(){
        $pdo = parent::getDataBase();   
        $atualizar = $pdo->prepare("UPDATE tblUsuarios SET "
                . "tblUsuariosNome='$this->nome',"
                . "tblUsuariosEmail='$this->email',"
                . " tblUsuariosSenha='$this->senha'"
                . " WHERE idtblUsuarios=$this->id");
	$atualizar->execute();
        if ($atualizar->rowCount() == 1) {
            header('Location:listagem.php');
              die("Alterado com sucesso");
        }
        }
        
        public function deletar(){
          $pdo = parent::getDataBase();  
          $excluir = $pdo->prepare("delete from tblUsuarios where idtblUsuarios"
                  . " = $this->id");
          $res = $excluir->execute();
          $num = $excluir->rowCount($res);
          if($num > 0):
              header('Location:listagem.php');
             echo die("Excluído com sucesso");
          endif;
        }
}
