<html>
    <head>
        <title> Tabela BD </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
</html>

<?php
    require_once('database_connection.php');
    exec("SET CHARACTER SET utf8");
       $sql = "SELECT id, nome, matricula, email FROM `aluno`";

       echo "<table class=\"table table-hover\">
               <tr>
                   <th>#</th>
                   <th>Nome</th>
                   <th>Matrícula</th>
                   <th>E-mail</th>
               </tr>";
    $resultado = $db->query($sql); // PEGA A CONEXAO DO DB DEFINIDA NO REQUIRE
       while($row = $resultado->fetch(PDO::FETCH_ASSOC))
       {
           echo "<tr scope=\"row\">";
           echo "<td>" . $row['id'] . "</tdE>";
           echo "<td>" . $row['nome'] . "</td>";
           echo "<td>" . $row['matricula'] . "</td>";
           echo "<td>" . $row['email'] . "</td>";
       }

       echo "</table>";
?>
