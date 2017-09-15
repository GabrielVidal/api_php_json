<?php 
	include 'classes/conexao.php';
	include 'classes/DAO/UsuarioDAO.php';

	if ($_GET) {
		
	$codigo = $_GET['codigo'];

	$UsuarioDAO = new UsuarioDAO;
	$consulta = $UsuarioDAO->consultarCodigo($codigo);

	if ($consulta == true) 
	{
		for ($i=0; $i < mysqli_num_rows($consulta); $i++) 
		{ 
			$linha = mysqli_fetch_array($consulta);

			$respostas [] = array(

				'id' => $linha['id'],
				'nome' => $linha['nome'],
				'sobrenome' => $linha['sobrenome'],
				'idade' => $linha['idade'],
				'sexo' => $linha['sexo']
			);
		}
	}
	echo json_encode($respostas);

	} 
	else {
		echo 'Nenhum parametro foi passado na URL';
	}
 ?>
