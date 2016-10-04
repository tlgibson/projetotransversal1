<?php include_once("model_form.php");

	$user="";
	$email="";
	$matr="";
	$senha="";

/*
 *DESCOMENTE OS 'ECHO' COMENTADOS PARA MELHOR VISUALIZAÇÃO
*/


//Verifica que ação foi tomada
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

	$mre = new model_form();
	$choice = get_post_action('Cadastrar', 'Deletar', 'Editar');

	if($choice == "Deletar"){
		$matr= get_input($_POST['matr']);
		$mre->deleta_user($matr);
		//echo "Deletando " . $matr;
	}else{
		$user = get_input($_POST['nome']);
		$email= get_input($_POST['email']);
		$matr= get_input($_POST['matr']);
		$senha= get_input($_POST['senha']);

		//Verifica se todas as informações foram preenchidas
		if($user && $email && $matr && $senha){
			if($choice == "Cadastrar"){
				$mre->cadastra_user($user, $email, $matr, $senha);
				//echo "Usuário cadastrado!";
			}
			elseif($choice == "Editar"){
				$mre->edita_user($user, $email, $matr, $senha);
				//echo "Usuário editado!";
			}
		}else{
			echo "Volte e preencha todos os campos!";
		}
	}


function get_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
