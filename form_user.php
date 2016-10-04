<?php include_once("model_form.php");

	$mre = new model_form();
	$cadastros =  $mre->todos_user();


?>
<html>
  	<?php include_once("head_file.html");?>

<body>
  <div class="container">

   <form  method="post" action="cadastra_user.php" id="form_cad_processos">
	<div class="input-group">
          Nome
      		<input type="text" class="form-control" placeholder="Ex.: João Paulo da Silva"name="nome" id="nome"><br>
          Email
          <input type="text" class="form-control" placeholder="Ex.: joao@unb.br"name="email" id="email"><br>
          Matrícula
          <input type="text" class="form-control" placeholder="Ex.: 123456789"name="matr" id="matr"><br>
          Senha
          <input type="password" class="form-control" name="senha" maxlength="32" id="senha"><br/>
        </div>
        <span class="input-group-btn">
          <button class="btn btn-default btn-md" name="Cadastrar" type="submit">
            Cadastrar
          </button>
          <button class="btn btn-default btn-md" name="Editar" type="submit">
            Editar
          </button>
          <button class="btn btn-default btn-md" name="Deletar" type="submit">
            Deletar
          </button>

        </span>
      </form>

   <form method="post" action="<?php echo htmlspecialchars("../php/valida_form_entrevista.php");?> " >

    <div class="form-group">
  	<label for="sel_processo">Processo:</label>
  	<select class="form-control" id="sel_processo">
		<?php foreach($cadastros as $cad){ ?>
        <!-- Processo mostra, na verdade, as matrículas -->
    		<option><?php echo $cad["matricula"]; ?></option>
    		<?php } ?>
  	</select>
     </div>

    <div class="form-group">
      <label for="fluxo">Fluxo:</label>
      <input type="file" id="fluxo"></textarea>
      <p class="help-block">Fluxograma do processo </p>
    </div>


    <div class="form-group">
      <label for="comment">Descri&ccedil;ão:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </div>
</body>
</html>
