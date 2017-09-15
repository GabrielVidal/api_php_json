<?php 
	class Conexao 
	{
		private $usuario = "root";
		private $senha = "";
		private $local = "localhost";
		private $banco = "web_api";
		private $con;

		public function __construct()
		{
			$this->con = mysqli_connect($this->local, $this->usuario, $this->senha) or die ("Conexão com o banco de dados falhou" .  mysql_error($this->con));
			mysqli_select_db($this->con, $this->banco) or die ("Conexão com o banco de dados falhou" .mysql_error($this->con));
		}


		public function getCon()
		{
			return  $this->con;
		}
	}
 ?>
