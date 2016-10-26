<?php 
include_once("conecta_bd.php"); // Arquivo padrão para conexão




class model_solicitacao{


	private $conn;

	public function __construct(){
	
		$cb = new conecta_bd(); 
		$this->conn = $cb->get_connection();
	}
	
	public function select_user($id){
		$comando = 'SELECT * FROM usuarios WHERE id = :id';
		$stmt = $this->conn->prepare($comando);
		$stmt->bindValue(':id', $id); //<-- Higienizado automaticamente pela PDO
		$stmt->execute();
	 
		//Transforma a query em um array para trabalhar com php
		$result = $stmt->fetchAll();

		return $result;
	}


}//fim da classe
?>