<?php
	include('conecta_bd.php');
	include('classe/Tarefa.php');

	$tarefas = new Tarefa($conexao);
	$tarefas->buscarTarefas();
	
	$botaoNovo = true;
	include('template/header.php');
	include('template/template_tarefas.php');
	include('template/footer.html');
?>