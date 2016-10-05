<?php
	require_once("conecta_db_user.php");
?>
<html>
	<body>
		<!-- Formulário de Login -->
		<form action="valida_login.php" id="form_login" method="post">
		<fieldset>
		<legend>Dados de Login</legend>
		  <label for="txEmail">Email</label>
		  <input type="text" name="email" id="txEmail" maxlength="25" />
		  <label for="txSenha">Senha</label>
		  <input type="password" name="senha" id="txSenha" />

		  <input type="submit" value="Entrar" />
		</fieldset>
		</form>
	</body>
</html>