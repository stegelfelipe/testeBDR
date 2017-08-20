<!-- File: src/Template/Tarefas/add.ctp -->

<div class="row">
	<div class="col-md-3">
	<h3><?= __('Menu'); ?></h3>

        <?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index'], ['class' => 'btn btn-info']); ?>
	</div>
	<div class="col-md-8">
		<h3><?= __('Adicionar Tarefa'); ?></h3>

		</br></br>
		<table class="table table-bordered">

		<?php
			echo $this->Form->create($tarefa);
			echo $this->Form->input('titulo');
			echo $this->Form->input('descricao', array('type' => 'textarea'));
			echo $this->Form->input('prioridade');
			echo $this->Form->input('Adicionar', array('label' => FALSE, 'type' => 'submit', 'class' => 'btn btn-success'));
			echo $this->Form->end();
		?>   
		</table>
	</div>
	<div class="col-md-1">
		
	</div>
</div>