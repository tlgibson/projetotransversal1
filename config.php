<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
<?php
//Verifica se há conexão com o MySQL
$con = @mysql_connect("localhost", "root", "") or die("Não foi possível conectar com o servidor de dados!");

//Verifica se o banco de dados existe
mysql_select_db("mapeamento", $con) or die("Banco de dados não localizado!");
?>
