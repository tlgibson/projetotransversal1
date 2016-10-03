<?php
require_once('criarbanco.php');
mysql_select_db("cadastro") or die(mysql_error());//Me conectei à meus banco de dados


$nome;
$Matricula;
$email;
$nome =$_POST["nome"];
$Matricula =$_POST["Matricula"];
$email =$_POST["email"];
echo $nome;

public function Inserir($nome,$Matricula,$email){
	$sql = mysqli_query($conexão,"INSERT INTO cadastro(nome, Matricula, email)
    VALUES ($name, $Matricula, $email)");
}
function editar($nome,$Matricula,$email){
	
	
}
function excluir($id,$nome,$Matricula,$email){
	$strSQL = "DELETE FROM people WHERE id = $id";
	mysql_query($strSQL);
}
?>