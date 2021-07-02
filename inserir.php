 
  <?php 

  
  if(isset($_GET['status']) and !empty($_GET['status'])){
	$status = $_GET['status'];
	if ($status = 'ok'){
		echo  '<center> Formulario foi enviado corretamente!!!</center>' ;

	}
	}

	
	 ?>
	


<form method="POST" action="acao_usuario.php" align="center">

	<h1 align="center",>Formulario dos Guri!</h1>

	<input type="hidden" name="acao" value="inserir">

	<br>Nome <br>
	<input style="border-radius: 10px; "type="text" name="nome"placeholder="Seu Nome">

	<br>Email <br>
	<input style="border-radius: 10px; "type="text" name="email" placeholder = " Seu Email ">

	<br>Telefone <br>
	<input style="border-radius: 10px; "type="text" name="telefone" placeholder="Seu Telefone">

	<br><br><input  type="submit" name="botao" value="Enviar">
	

</form>
















