<?php

	include ('conecta_bd.php');
	include('template/template_login.php');


	if ($_GET) {

		$login = $_GET['nome'];
		$senha = $_GET['senha'];

		$sql = "SELECT * FROM usuarios 
				WHERE login = '$login' AND senha = '$senha'";

		$result = mysqli_query($conexao, $sql);

		$consulta = mysqli_num_rows($result);

		if ($consulta > 0) {
			header("Location: tarefas.php");
		}
	}
	

