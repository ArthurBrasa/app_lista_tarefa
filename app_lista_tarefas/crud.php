<?php 
	
	class ControllerListaTarefa {
		private $tarefa;
		private $bd;

		public function __construct($tarefa, $bd) 
		{
			$this->tarefa = $tarefa;
			$this->bd = $bd;
		}

		public function cread() {
			// ...
			$query = "insert into lista_tarefa.tb_tarefas(tarefa) values(:tarefa);";
			
			$stmt = $this->bd->prepare($query);
			$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
			$stmt->execute();

		}

		public function read() {
			// ...
		}

		public function update() {
			// ...
		}

		public function delete() {
			// ...
		}

	}


?>