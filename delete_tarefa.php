<?php

	include('conecta_bd.php');
	include('classe/Tarefa.php');

	$tarefa = new Tarefa($conexao);
	$tarefa->deletarTarefa($_GET['id']);

	header('Location: tarefas.php');

?>