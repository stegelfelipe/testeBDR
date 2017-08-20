<!-- File: src/Template/Topics/edit.ctp -->

<div class="row">
	<div class="col-md-3">
	<h3><?= __('Menu'); ?></h3>

        <?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index'], ['class' => 'btn btn-info']); ?>
        </br></br>
        <?= $this->Html->link(__('Adicionar Tarefa'), ['action' => 'add'], ['class' => 'btn btn-info']); ?>
	</div>
	<div class="col-md-8">
		</br>
		<div class="panel panel-info">
			<div class="panel-heading">
    			<h1 class="panel-title"><b><?= h($tarefa->titulo); ?></h1></b>
  			</div>
			<div class="panel-body">
				<p><b>Descrição:</b> <?= h($tarefa->descricao); ?></p>
				</br>
				<b>Prioridade da Tarefa:</b> <?= h($tarefa->prioridade); ?>
			</div>
		</div>
	</div>
	<div class="col-md-1">
	</div>
</div>