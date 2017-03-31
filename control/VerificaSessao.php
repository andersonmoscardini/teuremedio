<?php

class VerificaSessao extends Conexao {

	private $login;
	private $senha;

	public function setLogin($login){
		$this->login = $login;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->senha;
	}

	public function logar(){
		$pdo = parent::getDataBase();
		$logar = $pdo->prepare("SELECT * FROM tblUsuarios WHERE tblUsuariosEmail = '$this->login' AND tblUsuariosSenha = '$this->senha'");
		$logar->execute();
		if ($logar->rowCount() == 1){
                    //Cria o array
			$dados = $logar->fetch(PDO::FETCH_OBJ);
			$_SESSION['administrador'] = $dados->tblUsuariosNome;
			$_SESSION['logado'] = true;
                }else{
			return false;
                }
	}

	public static function deslogar() {
		if(isset($_SESSION['logado'])){
			unset($_SESSION['logado']);
			session_destroy();
			header("Location: ../index.php");
                }
	}
}
?>