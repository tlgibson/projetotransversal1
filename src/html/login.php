 <html>
  	<?php include_once("head.html");?>
  	
<body>

  	
  	<div class="col-md-4">
  		<div class="container">
  			<form method="post" action="<?php echo htmlspecialchars("../php/control_login.php");?>" id="login">
				<div class="form-group">
    				<label for="email">Email address</label>
    				<input type="text" class="form-control" id="email" placeholder="Email" name="email">
  				</div>
  
  				<div class="form-group">
    				<label for="senha">Password</label>
    				<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
  				</div>

 				<button type="submit" class="btn btn-primary">Submit</button>
  			</form>	

  		</div>
  	</div>	

</body>
</html>    