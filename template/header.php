<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>

</head>
<body>
	<div class="header-container">
		<div class="header">
			<a href="tarefas.php"><img class="logo-img" src="img/logo.svg" width="45px" alt="logo do itask">
				<h1 class="logo-txt">iTask</h1>
			</a>
			
			<?php 
			if ($botaoNovo) : ?>	
				<a href="add_tarefa.php"><div class="btn-novo"> <img class="btn-novo-img" src="img/more.svg" width="25px" > Nova Tarefa</div></a>
			<?php
			else : ?>
				<a href="tarefas.php"><div class="btn-novo"> <img class="btn-novo-img" src="img/list.svg" width="25px"> Tarefas</div></a>
			<?php
			endif
			?>

		</div>
	</div>
	<div class="body-container">
		<div class="body-content">

