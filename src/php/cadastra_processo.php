<?php include_once("model_relatorio_entrevista.php");

	$processo="";
	$mre = new model_relatorio_entrevista();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$processo = get_input($_POST['processo']);
	}

	$mre->cadastra_processo($processo);

	
function get_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
