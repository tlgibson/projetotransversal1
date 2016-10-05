<?php 
include_once("conecta_db_user.php");
//Classe para validar o log in
class Validator{
  private $conn;

  //-----------CONSTRUTOR-----------
  public function __construct(){
    $cb = new conecta_bd();
    $this->conn = $cb->get_connection();
  }
  
  //Funcao para verificar se o usuario esta no banco de dados
  function valida_login($email,$senha){
	$comando = 'SELECT email,senha FROM cadastros WHERE email = :email';
    $stmt = $this->conn->prepare($comando);
    $stmt->bindValue(':email', $email); //<-- Higienizado automaticamente pela PDO
	//$stmt->bindValue(':senha', $senha); //<-- Higienizado automaticamente pela PDO
	$stmt->execute();
	 
	 
	 //Transforma a query em um array para trabalhar com php
	$result = $stmt->fetchAll();
	
	//Verifica se tem algo no array e retorna true se tiver e as senhas forem iguais
	if(count($result) > 0){
		foreach ($result as $user) {
			if($user['senha'] == $senha){
			return true;
		}
		else{
			return false;
			}
		}
	}
	elseif(count($result) == 0){
		return false;
	}
	else{
		echo "Algo de errado não está certo...";
	}  
  }
}
 ?>
 