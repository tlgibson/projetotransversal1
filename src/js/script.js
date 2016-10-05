jQuery(document).ready(function(){

		jQuery('#form_cad_processos').submit(function(){
			var dados = "processo="+document.getElementById("nome_processo").value			
			
			jQuery.ajax({
				type: "POST",
				url: "../php/cadastra_processo.php",
				data: dados,
				success: function( data )
				{
					alert( "Processo cadastrado com sucesso!!");
				}
			});
			
			return false;
		});


		



});




jQuery(document).ready(function(){

	jQuery('#cadastrar_usuario').submit(function(){
		var dados = jQuery(this).serialize();			
		
		jQuery.ajax({
			type: "POST",
			url: "../php/control_cadastro_usuario.php",
			data: dados,
			success: function( data )
			{	
				alert("Usuário cadastrado com sucesso");
			}
		});
			
			return false;
		});
});

