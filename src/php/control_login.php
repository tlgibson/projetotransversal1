<?php
include("model_user.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//Coloca os POTS do form_login em variaveis e as formata
	$email = test_input($_POST['email']);
	$senha = test_input($_POST['senha']);

	$modelUser = new model_user();
	$result = $modelUser->valida_login($email);

	if(valida_login($result,$senha)){
		
		header("Location: http://localhost/projetotransversal1/src/html/login_success.php");exit;
	}else{
		
		header("Location: http://localhost/projetotransversal1/src/html/login_fail.php");exit;
	}
	
}

function valida_login($result,$senha){

	if(count($result)>0){
		foreach ($result as $user) {
			if($user['senha'] == $senha){
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