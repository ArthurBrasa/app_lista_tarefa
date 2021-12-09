<?php 
	
	class Tarefa {
		private $tarefa;
	

		public function __set($att, $value) {
			$this->$att = $value;
		}

		public function __get($value) {
			return $this->$value;
		}

	}


	// teste
	/*
	$teste = new Tarefa();
	$teste->__set('tarefa', 'Estudar concurso do Ibama');
	echo $teste->__get('tarefa'); */

?>