<?php
//Verifica se há conexão com o MySQL
try {
    //$db = mysqli_connect("localhost", "root", "", "testes");
    $db = new PDO("mysql:dbname=testes;host=localhost", "root", "");
} catch(PDOException $ex) {
    echo "Erro na conexão com banco de dados.";
}
?>
