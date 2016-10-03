/*Aluna :Mariana Martins Pessoa Costa
Matricula : 140154175
Objetivo: Criar Um banco de dados*/
<?php
    require_once('conexão.php');//Aqui estou ligando o meu php que conecta o código ao meu sql    
    $sql = "CREAT DATABASE perfil"
	if ($conexão->query($sql) === TRUE) {
    echo "Database created successfully";
    } 
	else {
        echo "Error creating database: " . $conexão->error;
    }
	
	$sql =  CREATE TABLE cadastro (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Nome VARCHAR(30) NOT NULL,
            Matricula VARCHAR(30) NOT NULL,
            email VARCHAR(50),
        ); //Aqui criamos nossa tabela , com três colunas (Nome, Matricula e email);
?>