<?php

	$botaoNovo = false;

	$tarefa = array();

	if ($_POST) {
		
		include('conecta_bd.php');
		include('classe/Tarefa.php');

		

		$tarefa['nome'] = $_POST['nome'];
		$tarefa['descricao'] = $_POST['descricao'];
		$tarefa['prazo'] = $_POST['prazo'];
		$tarefa['prioridade'] = $_POST['prioridade'];
		if (isset($_POST['concluida'])) {
			$tarefa['concluida'] = 1;
		} else {
			$tarefa['concluida'] = 0;
		}

		$tarefas = new Tarefa($conexao);
		$tarefas->inserirTarefa($tarefa, $_GET['id']);

		header('Location: tarefas.php');
		die();

	}
	else{
		$tarefa = array(
			'nome' => '',
			'descricao' => '',
			'prazo' => '',
			'prioridade' => 3,
			'concluida' => '');	
	}

	include('template/header.php');
	include('template/formulario.php');
	include('template/footer.html');

?>