<?php 
	
	class UsuarioDAO
	{
		private $conexao;

		function __construct()
		{
			$this->conexao = new Conexao();
		}

		public function consultarTodosUsuarios()
		{
			$sql = "SELECT * FROM usuarios";

			$resultado = mysqli_query($this->conexao->getCon(), $sql);

			if(mysqli_num_rows($resultado) > 0)
			{
				return $resultado;
			}

				else{
					return false;
				}
		}


		public function consultarCodigo($codigo)
		{
			$sql = "SELECT * FROM usuarios WHERE id = '$codigo' ";

			$resultado = mysqli_query($this->conexao->getCon(), $sql);

			if(mysqli_num_rows($resultado) > 0)
			{
				return $resultado;
			}
			
				else{
					return false;
				}
		}

	}

 ?>