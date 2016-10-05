<?php
	include_once("valida_login.php");
?>

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$emailErr = $senhaErr = $validaErr = "";
$email = $senha = "";

//Verifica se o usuário clicou no botão Submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Verifica se todos os campos estão preenchidos
	if (!empty($_POST) AND !empty($_POST['email']) AND !empty($_POST['senha'])) {
			//Cria a classe Validator definida acima
			$vldt = new Validator();
			
			//Coloca os POTS do form_login em variaveis e as formata
			$email = test_input($_POST['email']);
			$senha = test_input($_POST['senha']);
			//Chama a função para validar o login
			if($vldt->valida_login($email,$senha) == true){
				header("Location: http://localhost/projetos3/projetotransversal1/login_success.php");exit;
			}
			else{
				$validaErr = "Os dados de email e senha não coincidem";
			}
	}
	
//Verifica se o usuário digitou o email
  if (empty($_POST["email"])) {
    $emailErr = "Por favor dgite o email";
  } else {
    $email = test_input($_POST["email"]);
  }
  //Verifica se o usuário digitou a senha
  if (empty($_POST["senha"])) {
    $senhaErr = "Por favor digite a senha";
  } else {
    $senha = test_input($_POST["senha"]);
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
<!------------Formulário de login-------------->
<h2>Log In</h2>
<span class="error"> <?php echo $validaErr;?></span>
<p><span class="error">* campo obrigatório.</span></p>
<!--Redireciona o formulário para o proprio arquivo php dele-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Senha: <input type="password" name="senha">
  <span class="error">* <?php echo $senhaErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Entrar">  
</form>

</body>
</html>