<?php
include("model_user.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//Coloca os POTS do form_login em variaveis e as formata
	$email = test_input($_POST['email']);
	$senha = sha1(test_input($_POST['senha']));


	$modelUser = new model_user();
	$result = $modelUser->valida_login($email);

	$b = valida_login($result,$senha);

	
	if(valida_login($result,$senha) === true){
		


		header("Location: ../html/home.php");exit;
	}else{
		
		header("Location: ../html/login_fail.php");exit;
	}
	
}

function valida_login($result,$senha){

	if(count($result)>0){
		foreach ($result as $user) {
			
			if($user['senha'] === $senha){
				session_start();
				$_SESSION["usuario_logado"] = true;
				$_SESSION["usuario"] = $user["nome"];
				$_SESSION["id_user"] = $user["id"];
				$_SESSION["perfil"] = $user["tipo_user"];
				return true;
			}else{
				return false;
			}
		}
	}else{
		return false;
	}

}

//Formata os dados para entidades html
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>