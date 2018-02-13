<?php

	include ('conecta_bd.php');
	include ('classe/Usuario.php');
	include('template/template_login.php');


	if ($_POST) {

		$login = $_POST['nome'];
		$senha = $_POST['senha'];

		$user = new Usuario($conexao);

		$num_row = $user->buscarUsuario($login, $senha);

		if ($num_row > 0) {
			header("Location: tarefas.php");
		}
	}
	

