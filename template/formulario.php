<?php

if ($_POST) : ?>
  <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Tarefa cadastrada com sucesso!</strong> <a href="tarefas.php" class="alert-link"> Ver minhas tarefas</a>
  </div>
<?php
endif;
?>



<div>
  <h1 class="titulo-pagina">Cadastrar Nova Tarefa</h1>
  <hr>
</div>

<div class="form-container">
  <form method="post">
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>" />
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da Tarefa" value="<?php echo $tarefa['nome']; ?>">
    </div>
    <div class="form-group">
      <label for="comment">Descrição:</label>
      <textarea name="descricao" id="descricao" class="form-control" rows="5" id="comment" placeholder="Descreva detalhadamente sobre a tarefa" value="" ><?php echo $tarefa['descricao']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="prazo">Prazo</label>
      <input type="date" name="prazo" id="prazo" class="form-control" placeholder="Prazo para concluir a tarefa" value="<?php echo $tarefa['prazo']; ?>" required/>
      <span class="validity"></span> 
    </div>

    <label>Prioridade:</label>
    <div class="form-group">
      <div class="radio-inline">
        <label><input type="radio" name="prioridade" value="1" 
            <?php echo ($tarefa['prioridade']==1)?'checked':''; ?> />Alta</label>
      </div>
      <div class="radio-inline">
        <label><input type="radio" name="prioridade" value="2"
            <?php echo ($tarefa['prioridade']==2)?'checked':''; ?> />Mais ou Menos</label>
      </div>
      <div class="radio-inline">
        <label><input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade']==3)?'checked':''; ?> />Baixa</label>
      </div>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" name="concluida" value="1"
            <?php echo ($tarefa['concluida']==1)?'checked':''; ?> /> Tarefa Concluida
      </label>
    </div>

    <a href="tarefas.php">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="Salvar">
  </form>
</div>