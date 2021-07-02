<?php
require_once('conexao.php');

$conteudo_recebido = $_POST;
$acao = $conteudo_recebido['acao'];
$pag = '';

switch ($acao) {
	case 'inserir':
		$pag = 'inserir';
		$nome = $conteudo_recebido['nome'];
		$email = $conteudo_recebido['email'];
		$telefone = $conteudo_recebido['telefone'];


		$query = 'INSERT INTO contato( 
					nome,
					email,
					telefone) 
				VALUES(
				"'.$nome.'",
				"'.$email.'",
				"'.$telefone.'")';


		$res = mysqli_query($conn, $query);

		if (!$res) {
			echo 'erro burro';
			// code...
		}
		break;

	case 'inserircargo':
		$pag = 'inserircargo';
		$nome_cargo = $conteudo_recebido['nome_cargo'];

		$query = 'INSERT INTO cargo(
			nome_cargo)
		VALUES(
		"'.$nome_cargo.'")';

		$res = mysqli_query($conn, $query);
		
	
	break;

	case 'buscarcontato':
	




		




	break;
	
	case 'excluir':
		// $acao == editar
	break;


	default;
	echo'acao invalida';
	break;

	
}
	
	header('Location: index.php?pag='.$pag.'&status=ok');
	exit;

	/*if (status == ok) {
		echo "Formulario enviado com sucesso!!!";
		
	}else{
		echo "Formulario não foi enviado!!!";
	}*/
?>

























echo'passei aqui';
die;

?>