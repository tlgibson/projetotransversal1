<?php
session_start();
$error = '';
if (isset($_POST['submit']))
    {
if (empty($_POST['usuario']) || empty($_POST['senha']))
    {
$error = "Usuario ou senha inválidos.";
    }
else
{
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("mydb", $connection);
$query = mysql_query("SELECT * FROM login WHERE senha='$senha' AND usuario='$usuario'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1)
    {
$_SESSION['login_usuario']=$usuario;
// Redireciona a página, nao sei qual a localização que vcs usaram.
//header("location: SOMETHING.php");
    }
else
    {
$error = "Usuario ou senha inválidos";
    }
mysql_close($connection);
    }
    }
?>



<?php
//confere tudo do login
//$connection = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("mydb", $connection);
//session_start();
//$usuario_ok=$_SESSION['login_user'];
//$ses_sql=mysql_query("SELECT usuario FROM login WHERE usuario='$usuario_ok'", $connection);
//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row['usuario'];
//if(!isset($login_session))
//  {
//mysql_close($connection);
//header('Location: SOMETHING.php');
//  }
?>


<?php
//fechar conexão
//session_start();
//if(session_destroy())
//  {
//header("Location: SOMETHING.php");
//  }
?>
