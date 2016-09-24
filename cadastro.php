<?php
//Só abre o formulário se houver conexão com o MySQL
require_once "config.php";
?><html>
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
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$user = $_POST['usuario'];
	$senha = $_POST['senha'];

	//Se qualquer um dos campos estiver vazio, enviar mensagem de erro

	if(empty($nome)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($email)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($user)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($senha)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}else{
		$query1 = mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE usuario = '$user'"));
		//Verificar se já existe usuário cadastrado anteriormente
		if($query1 == 1){
			echo "<script>alert('Usuário já existe.'); history.back();</script>"; 
		}
		//Se não houver, cadastre
		else{
			//Atribua ao banco de dados as seguintes informações e
			//mostre mensagem de êxito
			mysql_query("INSERT INTO usuario (nome, email, usuario, senha) VALUES ('$nome','$email','$user','$pwd')");
			echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
			echo "<meta http-equiv='refresh' content='0, url=./'>";
		}
	}
}

?>
