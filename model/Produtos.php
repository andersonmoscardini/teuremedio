<?php

class Produtos extends Conexao {

    private $id;
    private $nome;
    private $laboratorio;
    protected $idcat;
    protected $idclie;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLaboratorio() {
        return $this->laboratorio;
    }

    public function getIdcat() {
        return $this->idcat;
    }

    public function getIdclie() {
        return $this->idclie;
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

    public function setIdcat($idcat) {
        $this->idcat = $idcat;
    }

    public function setIdclie($idclie) {
        $this->idclie = $idclie;
    }

    public function cadastrar() {
        $pdo = parent::getDataBase();
        $cadastrar = $pdo->prepare("INSERT INTO tblProdutos  VALUES ('null', '$this->nome', '$this->laboratorio', '$this->idcat','$this->idclie')");
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
        $listar = $pdo->prepare("SELECT * FROM tblProdutos");
        $res = $listar->execute();
        $num = $listar->rowCount($res);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $arr = $listar->fetch($res);
                echo "<form role='form' method='get' action=atualizar.php?>";
                echo '<input name=id type=hidden value='. $arr['idtblProdutos'] .'>';
                echo "<tr>";
                echo '<td><input name=nome type=text value=' . $arr['tblProdutosNome'] .'></td>';
                echo '<td><input name=laboratorio type=text value=' . $arr['tblProdutosLaboratorio'] .'></td>';
                echo '<td>' . $arr['tblCategorias_idtblCategorias'] .'</td>';
                echo '<td>' . $arr['tblClientes_idtblClientes'] .'</td>';
                echo '<td><input name=alterar type=submit value=Alterar></td>';
                echo '<td><a class=btn href=excluir.php?id='.$arr['idtblProdutos'].'>Excluir</a></td>';
                echo "</tr>";
                echo "</form>";
            }
        }
    }

    public function buscar($param) {
        $pdo = parent::getDataBase();
        $listar = $pdo->prepare("SELECT * FROM tblProdutos WHERE tblProdutosNome LIKE '%". $param . "%'");
        $res = $listar->execute();
        $num = $listar->rowCount($res);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $arr = $listar->fetch($res);
                echo "<tr>";
                echo '<td>' . $arr['tblProdutosNome'] . '</td>';
                echo '<td>' . $arr['tblProdutosLaboratorio'] . '</td>';
                echo '<td> - </td>';
                echo "</tr>";
            }
        }
    }

        public function atualizar(){
        $pdo = parent::getDataBase();
        $atualizar = $pdo->prepare("UPDATE tblProdutos SET "
                . "tblProdutosNome='$this->nome',"
                . "tblProdutosLaboratorio='$this->laboratorio'"
                . " WHERE idtblProdutos=$this->id");
	$atualizar->execute();
        if ($atualizar->rowCount() == 1) {
            header('Location:listagem.php');
              die("Alterado com sucesso");
        }
        }

        public function deletar(){
          $pdo = parent::getDataBase();
          $excluir = $pdo->prepare("delete from tblProdutos where idtblProdutos"
                  . " = $this->id");
          $res = $excluir->execute();
          $num = $excluir->rowCount($res);
          if($num > 0):
              header('Location:listagem.php');
             echo die("Excluído com sucesso");
          endif;
        }
}
