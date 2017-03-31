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
        $cadastrar = $pdo->prepare("insert into tblCategorias (idtblCategorias,tblCategoriasNome)"
                . " values (? , ?)");
        $cadastrar->execute(array('null', $this->catNome));
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
        $listar = $pdo->prepare("SELECT * FROM tblCategorias");
        $res = $listar->execute();
        $num = $listar->rowCount($res);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $arr = $listar->fetch($res);
                echo "<form role='form' method='get' action=atualizar.php?>";
                echo '<input name=id type=hidden value='. $arr['idtblCategorias'] .'>';
                echo "<tr>";
                echo '<td>' . $arr['idtblCategorias'] .'</td>';
                echo '<td><input name=nome type=text value=' . $arr['tblCategoriasNome'] .'></td>';
                echo '<td><input name=alterar type=submit value=Alterar></td>';
                echo '<td><a class=btn href=excluir.php?id='.$arr['idtblCategorias'].'>Excluir</a></td>';
                echo "</tr>";
                echo "</form>";
            }
        }
    }
            
        public function atualizar(){
        $pdo = parent::getDataBase();   
        $atualizar = $pdo->prepare("UPDATE tblCategorias SET tblCategoriasNome='$this->catNome' WHERE idtblCategorias=$this->idCat");
	$atualizar->execute();
        if ($atualizar->rowCount() == 1) {
            header('Location:listagem.php');
              die("Alterado com sucesso");
        }
        }
        
        public function deletar(){
          $pdo = parent::getDataBase();  
          $excluir = $pdo->prepare("delete from tblCategorias where idtblCategorias = $this->idCat");
          $res = $excluir->execute();
          $num = $excluir->rowCount($res);
          if($num > 0):
              header('Location:listagem.php');
             echo die("Excluído com sucesso");
          endif;
        }
        
        public function listarcategoria() {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblCategorias");
        $res = $listar->execute();
        $num = $listar->rowCount($res);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $arr = $listar->fetch($res);
                echo '<option value="'. $arr['idtblCategorias'] .'">'. $arr['tblCategoriasNome'] .'</option>';
            }
        }
    }
}
