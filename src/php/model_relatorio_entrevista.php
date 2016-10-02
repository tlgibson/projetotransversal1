<?php include_once("conecta_bd.php");

class model_relatorio_entrevista{

	private $conn;	
	
public function model_relatorio_entrevista(){
	$cb = new conecta_bd();
	$this->conn = $cb->get_connection();
}


public function cadastra_processo($processo){
	
	$stmt = $this->conn->prepare('INSERT INTO processos (processo) VALUES (:processo)');
	$stmt->bindValue(':processo', $processo); //<-- Higienizado automaticamente pela PDO
	$stmt->execute();
}


public function todos_processos(){

	$stmt = $this->conn->prepare("SELECT * FROM `processos` ORDER BY processo ASC");
	$stmt->execute();

	$result = $stmt->fetchAll();
	
	return $result; 
}

}

?>
