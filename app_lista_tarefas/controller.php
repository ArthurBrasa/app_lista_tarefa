<?php 
	
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// echo "<pre>";
	// print_r($_GET);
	// echo "</pre>";

	$bd = new BdConection('mysql:host=localhost;bdname=lista_tarefa', 'root', '');
	
	$conection = $bd->conecte();
	$tarefa = new Tarefa($_POST['tarefa']);

	if(!empty($_GET['acao']) && $_GET['acao'] == 'nova_tarefa') {
		$controller = new ControllerListaTarefa($tarefa, $conection);
		$controller->cread();
		header('Location: http://localhost/app_lista_tarefa/app_lista_tarefas_public/nova_tarefa.php?status=ok');
	}
	
	
	

?>