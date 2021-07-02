<?php

require_once 'index.php';
  
?>

<form method="POST" action="buscar.php" align="center">

	<h1 align="center",>Buscar contato</h1>

	<input type="hidden" name="acao" value="buscarcontato">

	<br> <br>
	<input style="border-radius: 10px;"type="text" name="pesquisa"placeholder="Digite aqui">
		
		<select name="opbuscar">

			<option value="nome">
				Nome			
			</option>

			<option value="id_contato">
				Id			
			</option>

			<option value="email">
				Email			
			</option>

		</select>


	<br><br><input  type="submit" name="botao" value="Enviar">

	

</form>

