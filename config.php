<?php
//Verifica se há conexão com o MySQL
try {
    $com = new PDO('mysql:host=localhost;dbname=mapeamento', 'root', '');
} catch(PDOException $ex) {
    echo "Erro na conexão com banco de dados.";
}
?>
