
<?php
include('helper.php');
?>

<div>
	<div class="titulo-pagina"><h1>Minhas Tarefas</h1></div>

	<div>
		<table class="table table-hover table-condensed table-bordered" id="table">
			<tr>
				<th> <img src="img/goal.svg" width="20px"> Nome</th>
				<th> <img src="img/desc.svg" width="20px"> Descrição</th>
				<th> <img src="img/calendar.svg" width="20px"> Prazo</th>
				<th> <img src="img/priority.svg" width="16px"> Prioridade</th>
				<th> <img src="img/ok.svg" width="20px"> Concluida</th>
				<th> <img src="img/settings.svg" width="20px"> Ação</th>
			</tr>

			<?php
			foreach ($tarefas->tarefas as $tarefa): ;?>
				
				<tr>

					<td> <?php echo $tarefa['nome']; ?> </td>
					<td> <?php echo $tarefa['descricao']; ?> </td>
					<td> <?php echo traduz_data_para_exibir($tarefa['prazo']); ?> </td>
					<td> <?php echo traduz_prioridade($tarefa['prioridade']); ?> </td>

					<td> 
						<?php if ($tarefa['concluida']) : ?>
							<img src="img/yes.svg" width="20px">
						<?php else : ?>
							<img src="img/line.svg" width="20px">
						<?php endif ?>
					</td>

					<td>
						<a href="edit_tarefa.php?id=<?php echo $tarefa['id']; ?>"><img src="img/edit.svg" width="25px" class="icon-acoes" data-toggle="tooltip" title="Editar"></a>
		
						<a href="delete_tarefa.php?id= <?php echo $tarefa['id']; ?>"><img src="img/crash.svg" width="25px" id="img-excluir" class="icon-acoes" data-toggle="tooltip" title="Excluir"></a>
					</td>

					
						
					
				</tr>

			<?php
			endforeach; ?>

		</table>
	</div>
</div>

<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
</script>