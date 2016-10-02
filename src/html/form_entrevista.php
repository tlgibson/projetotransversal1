<?php include_once("../php/model_relatorio_entrevista.php");

	$mre = new model_relatorio_entrevista();
	$processos =  $mre->todos_processos();
	

?>
<html>
  	<?php include_once("head.html");?>
  
<body>
  <div class="container">
    
   <form  method="post" action="" id="form_cad_processos">
	<div class="input-group">
      		<input type="text" class="form-control" placeholder="Cadastrar novo processo..."name="processo" id="nome_processo">
      		<span class="input-group-btn">
        		<button class="btn btn-default btn-md" type="submit">
				OK
			</button>
      		</span>
    	</div><!-- /input-group -->
   </form>	

   <form method="post" action="<?php echo htmlspecialchars("../php/valida_form_entrevista.php");?> " >	
   
    <div class="form-group">
  	<label for="sel_processo">Processo:</label>
  	<select class="form-control" id="sel_processp">
		<?php foreach($processos as $processo){ ?>
    		<option><?php echo $processo["processo"]; ?></option>
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
