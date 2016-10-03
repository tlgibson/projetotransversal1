<html>
<head>
    <title>Teste
/*Mariana Martins Pessoa Costa
Matricula : 140154175 
Objetivo : Fazer uma conexão com meu banco de dados
*/
	</title> 
</head>
</html>
<?php
    do{$conexão = msqli_connect("localhost","root","");}while(!$conexão);//Aqui realizei a conexão entre o meu php com meu sql
	//Olhar msqli
	//do{$seleçãobd= msql_select_db($conexão,'cadastro');}while(!$seleçãobd);//Selecionamos o banco de dados
?>