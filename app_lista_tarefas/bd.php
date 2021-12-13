<?php  

	/**
	 * Class para iniciação do banco de dados
	 */
	class BdConection
	{
		private $root;
		private $pass;
		private $dns;

		public function __construct($dns, $root, $pass)
		{
			$this->root = $root;
			$this->pass = $pass;
			$this->dns = $dns;
		}

		public function conecte() {
			try
			{
				// code...
				$connection = new PDO($this->dns, $this->root, $this->pass);
				return $connection;

			}
			catch(PDOException $e)
			{
				// code...

				return "Código do erro: ".$e->getCode()." Mensagem: ".$e->getMessage();
			}
		}


	}

	/*
	$bd = new BdConection('mysql:host=localhost;bdname=lista_tarefa', 'root', '');	
	$stmt = $bd->conecte();
	print_r($stmt) */

?>