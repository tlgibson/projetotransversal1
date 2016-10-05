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
 
 <html>
	<body>
		<?php
			//Cria a classe Validator definida acima
			$vldt = new Validator();
			
			//Coloca os POTS do form_login em variaveis
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			
			
			//Verifica se o usuário digitou algo no login e direciona para a pagina do login case tenha deixado em branco
			if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
				header("Location: http://localhost/projetos3/projetotransversal1/form_login.php");exit;
			}
			
			//verifica se existe o usuario no BD, e caso true, o direciona para a pagina de sessao dele
			if($vldt->valida_login($email,$senha) == true){
				header("Location: http://localhost/projetos3/projetotransversal1/login_success.php");exit;
			}
			
			//se nao existir o usuario, direciona para o cadastro de usuario ----não implementar ainda---
			/*elseif($vldt->valida_login($email,$senha) == false){
				header("Location: http://localhost/projetos3/projetotransversal1/form_user.php");exit;
			}*/
			
			//se nao existir o usuario, manda uma mensagem
			elseif($vldt->valida_login($email,$senha) == false){
				echo "Não o encontramos no banco de dados..."."\n";
				echo "Tem certeza que digitou as informações corretas?";
			}
		?>
	</body>
 </html>