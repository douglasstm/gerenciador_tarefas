<?php

	$botaoNovo = false;

	include('conecta_bd.php');
	include('classe/Tarefa.php');

	$tarefas = new Tarefa($conexao);

	if ($_POST) {
		

		$tarefa = array();

		$tarefa['nome'] = $_POST['nome'];
		$tarefa['descricao'] = $_POST['descricao'];
		$tarefa['prazo'] = $_POST['prazo'];
		$tarefa['prioridade'] = $_POST['prioridade'];
		if (isset($_POST['concluida'])) {
			$tarefa['concluida'] = 1;
		} else {
			$tarefa['concluida'] = 0;
		}

		
		$tarefas->editarTarefa($tarefa, $_GET['id']);
		
		header('Location: tarefas.php');
		die();
	}

	$tarefa = $tarefas->buscarTarefa($_GET['id']);


	include('template/header.php');
	include('template/formulario.php');
	include('template/footer.html');
?>
