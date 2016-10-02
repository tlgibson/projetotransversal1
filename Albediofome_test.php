<?php
  $host = "localhost";
  $usuario ="root";
  $senha = "";
  $banco = "projeto";//nome do Database que eu criei
    //É criada uma nova conexão com o banco de dados com os parametros host,usuario,senha e database
  $sql = new mysqli($host,$usuario,$senha,$banco);
  $nome;
  $matr;
  $email;
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $matr = $_POST["matr"];
    if(isset($_POST['ca'])){ //verifica se houve post de algum campo que tinha name="ca"
          $qr = $sql->query ("INSERT INTO tabela_1 (nome, matricula, email) VALUES ('$nome', '$matr','$email')");
          echo "USUARIO CADASTRADO COM SUCESSO!!";
}
    elseif(isset($_POST['Ex'])){
          $qr = $sql->query ("DELETE FROM tabela_1 where nome = '$nome' and matricula = '$matr' and email = '$email'");//,matr= '$matr', email = '$email'");
          echo "USUARIO DELETADO COM SUCESSO!!";
}
    elseif(isset($_POST['Ed'])){
          $qr = $sql->query ("UPDATE  tabela_1 SET nome='$nome'AND email='$email' WHERE matricula='$matr'");
          echo "OS DADOS USUARIO DE MATRICULA $matr FORAM ALTERADOS PARA NOME:$nome e EMAIL:$email";
}
 ?>
