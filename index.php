<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<title>aula 1</title>

	</head>


	<body>
			
		<table border="1" align="center" width="80%">

			<tr style="background: #010101;" >
				<td align="center" >
				<h1 style="color: #e8e8e8;">Curso de PHP</h1>
				</td>

				

			</tr>


			<tr align="center" style="background: #f0f0f0;">

				<td>
					<br>
					
					<a href="index.php?pag=home" style="text-decoration: none;padding:25px;color:#000000;font-size: 30px;">Home</a>
					<a href="index.php?pag=lista" style="text-decoration:none;padding:25px;color:#000000;font-size:30px;">Lista</a>
					<a href="index.php?pag=inserir"style="text-decoration:none;padding:25px;color:#000000;font-size:30px;">Inserir</a>
					<a href="index.php?pag=inserircargo" style="text-decoration: none;padding:25px;color:#000000;font-size: 30px;">Inserir Cargo</a>
					<a href="index.php?pag=buscar"style="text-decoration:none;padding:25px;color:#000000;font-size:30px;">Buscar</a>

					<br>
					<br>
					

				</td>
				


			</tr>

			<tr style="background: #f0f0f0;">

				<td>

					
				
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					

					<?php
						
						
						if(isset($_GET['pag']) and !empty($_GET['pag'])){
							$pg = $_GET['pag'];
								require_once($pg.'.php');
						}
						else{
							require_once('home.php');
						}


					?>
					
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
					
				</td>
				

			</tr>

			<tr style="background: #010101;">

				<td>
				
				<span style="color: #e8e8e8;">Docservice</span>
				<br>		
				</td>
				


			</tr>


			
		</table>



	</body>

</html>