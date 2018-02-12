<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "root";
	$db_banco = "tarefas";

	$conexao = mysqli_connect($db_host, $db_user, $db_password, $db_banco);

	if (mysqli_connect_errno($conexao)) {
		echo "<h2> Problemas ao se conectar com o banco de dados</h2>";
		die();
	}

?>