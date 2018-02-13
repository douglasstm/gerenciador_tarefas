<?php

class Usuario {

	public $conexao;

	public function __construct($con){
		$this->conexao = $con;
	}

	public function buscarUsuario($login, $senha){
		$sql = "SELECT * FROM usuarios 
				WHERE login = '$login'
				AND senha = '$senha'";

		$result = mysqli_query($this->conexao, $sql);

		return mysqli_num_rows($result);
	}
}