<!-- File: src/Template/Topics/edit.ctp -->

<div class="row">
	<div class="col-md-3">
	<h3><?= __('Menu'); ?></h3>

        <?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index'], ['class' => 'btn btn-info']); ?>
        </br></br>
        <?= $this->Html->link(__('Adicionar Tarefa'), ['action' => 'add'], ['class' => 'btn btn-info']); ?>
	</div>
	<div class="col-md-8">
		<h3><?= __('Editar Tarefa'); ?></h3>

		</br></br>
		<table class="table table-bordered">

		<?php
			echo $this->Form->create($tarefa);
			echo $this->Form->input('id', array('type' => 'hidden'));
			echo $this->Form->input('titulo');
			echo $this->Form->input('descricao', array('type' => 'textarea'));
			echo $this->Form->input('prioridade');
			echo $this->Form->input('Salvar', array('label' => FALSE, 'type' => 'submit', 'class' => 'btn btn-success'));
			echo $this->Form->end();
		?>   
		</table>
	</div>
	<div class="col-md-1">
		
	</div>
</div>