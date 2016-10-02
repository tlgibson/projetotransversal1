<?php
    include("cone.php");
    //incluir a conexao por meio do programa feito anteriormente
    $tabela = "SELECT * FROM tabela_1";
    //seleciona todos os dados da tabela criada
    $dados = $mysqli->query($tabela);
    //variavel mysqli criada no cone.php.
    //funçao query efetua a consulta sql  bota na variavel dados.

?>

<html>
<!--Cria uma tabela em html com os campos Nome ,matricula e email -->
    <head>
    </head>
    <body>
            <table>
                    <tr>
                        <td>Nome</td>
                        <td>Matricula</td>
                        <td>Email</td>
                    </tr>

<!-- fetch_array:Retorna uma array que corresponde a linha obtida-->
<!--Cada vez que o while é executado ,as colunas do banco de dados armazenados
em dados vao para a variavel mostra,por meio da funçao fetch_array e printo todo mundo na tela  -->
<?php
    while ($mostra = $dados->fetch_array())
    {
            echo "<tr><td>".$mostra['nome']."</td>";
            echo "<td>".$mostra['matricula']."</td>";
            echo "<td>".$mostra['email']."</td></tr>";

    }
?>
            </table>
    </body>
</html>
