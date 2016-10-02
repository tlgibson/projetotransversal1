<?php
//Só abre o formulário se houver conexão com o MySQL
require_once "config.php";
include "alteracoes.php";
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title>Cadastro - Mapeamento de processos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div id="cadastro">
	<!-- Caso o usuário clique no botão de cadastrar,
	ele vai	para ?go=cadastrar -->
	<form method="post" action="?go=cadastrar">
		<table id="cad_table">
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" id="nome" class="txt" /></td>
			</tr>
			<tr>
				<td>Matricula:</td>
				<td><input type="text" name="matricula" id="matricula" class="txt" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" id="email" class="txt" /></td>
			</tr>
			<tr>
				<td>Usuário:</td>
				<td><input type="text" name="usuario" id="usuario" class="txt" maxlength="16" /></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="password" name="senha" id="senha" class="txt" maxlength="16" /></td>
			</tr>
			<tr>
				<!-- Parte referente aos botões de cadastrar e cancelar-->
				<td colspan="2"><input type="submit" value="Cadastrar" id="btnCad">
				&nbsp;
				<a href="./">
					<input type="button" value="Cancelar" class="btn" id="btnCancelar">
				</a>
			</td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>

<?php

//Se ele clicou em cadastrar
if(@$_GET['go'] == 'cadastrar'){
	//Armazena os campos preenchidos
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$email = $_POST['email'];
	$user = $_POST['usuario'];
	$senha = $_POST['senha'];

	//Se qualquer um dos campos estiver vazio, enviar mensagem de erro
	if(empty($nome) || empty($matricula) || empty($email) || empty($user) || empty($senha)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}else{
		//echo "To no else...";
		//$alteracoes->inserir_processo($nome, $matricula, $email);
		try {
				 $sql = "INSERT INTO cadastro (nome, email, usuario) VALUES  ('$nome',  '$email', '$user')";

				 $db->exec($sql);
				 print("Inseri um cadastro.\n");

		} catch(PDOException $e) {
				echo $e->getMessage();//Remove or change message in production code
		}
	}
}
?>
