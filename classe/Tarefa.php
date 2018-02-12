<?php

class Tarefa {

	public $conexao;
	public $tarefa = array();

	public function __construct($con){
		$this->conexao = $con;
	}

	public function buscarTarefas(){

		$sql = "SELECT * FROM tarefas";
		$resultado = mysqli_query($this->conexao, $sql);

		$this->tarefas = array();

		while($tarefa = mysqli_fetch_assoc($resultado)){
			$this->tarefas[] = $tarefa;
		}
	}

	public function inserirTarefa($tarefa){

		$sql = "INSERT INTO tarefas(nome, descricao, prazo, prioridade, concluida) VALUES ('{$tarefa['nome']}','{$tarefa['descricao']}','{$tarefa['prazo']}',{$tarefa['prioridade']},{$tarefa['concluida']})";

		mysqli_query($this->conexao, $sql);
	}

	public function deletarTarefa($id){
		$sql = "DELETE FROM tarefas WHERE id=".$id;

		mysqli_query($this->conexao, $sql);
	}

	public function buscarTarefa($id){

		$sql = "SELECT * FROM tarefas WHERE id=".$id;
		$resultado = mysqli_query($this->conexao, $sql);

		return mysqli_fetch_assoc($resultado);
	}

	public function editarTarefa($tarefa, $id){
		$sql = "UPDATE tarefas SET
			nome = '{$tarefa['nome']}',
			descricao = '{$tarefa['descricao']}',
			prazo = '{$tarefa['prazo']}',
			prioridade = {$tarefa['prioridade']},
			concluida = {$tarefa['concluida']}
			WHERE id=".$id;

		mysqli_query($this->conexao, $sql);
	}
	
}

?>