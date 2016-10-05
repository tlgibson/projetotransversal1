<?php
include_once("model_user.php");
include_once("user.php");

	

	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
			$nome = get_input($_POST['nome']);
			$email= get_input($_POST['email']);
			$matricula= get_input($_POST['matricula']); 
			$cpf= get_input($_POST['cpf']); 
			$data_nascimento= get_input($_POST['data_nascimento']); 
			$telefone= get_input($_POST['telefone']); 
			$nome_mae= get_input($_POST['nome_mae']); 
			$tipo_user= get_input($_POST['tipo_user']); 
			$senha= get_input($_POST['senha']);
	
		$user = new user($nome, $email, $matricula, $cpf, $data_nascimento, $telefone, $nome_mae, $tipo_user, $senha);
		$modelUser = new model_user($user);

		$modelUser->cadastra_usuario($user);

	}	


function get_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>