jQuery(document).ready(function(){

		jQuery('#form_cad_processos').submit(function(){
			var dados = "processo="+document.getElementById("nome_processo").value			
			alert(dados);
			jQuery.ajax({
				type: "POST",
				url: "../php/cadastra_processo.php",
				data: dados,
				success: function( data )
				{
					alert( data );
				}
			});
			
			return false;
		});



});
