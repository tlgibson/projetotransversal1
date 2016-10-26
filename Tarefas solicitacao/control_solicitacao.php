<?php
include("model_solicitacao.php");

//class model_solicitacao{
	
//	public function processa_solicitacao(){
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$id_solicitacao = test_input($_POST['id_solicitacao']);
		$id_user = test_input($_POST['id_user']);
		
		$solicitacao = monta_dados_solicitacao($id_solicitacao,$id_user);
		echo $solicitacao['nome_user']."\n".$solicitacao['matricula']."\n";
		echo $solicitacao['email']."\n";
		echo count($solicitacao);
	}
	
	
//}
	
	//Formata os dados para entidades HTML
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	//Devolve um array referenciado com os dados necessários para montar a solicitacao como um documento
	function monta_dados_solicitacao($id_sol,$id_user){
		$nome_user;$matricula;$email;
		$model_solicitacao = new model_solicitacao();
		$users = $model_solicitacao->select_user($id_user);
		foreach ($users as $user){
			$nome_user = test_input($user['nome']);
			$matricula = test_input($user['matricula']);
			$email = test_input($user['email']);
		}
		//Array referenciado
		$dados_solicitacao = array('nome_user' => $nome_user,
									'matricula' => $matricula,
									'email' => $email);
		return $dados_solicitacao;	
	}//Fim monta_dados_solicitacao()
	
	
//}//fim da classe
?>