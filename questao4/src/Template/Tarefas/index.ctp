<div class="row">
    <div class="col-md-12">
        <h3><?= __('Lista de Tarefas'); ?></h3>
        </br>
        <?= $this->Html->link(__('Abrir Nova Tarefa'), ['action' => 'add'], ['class' => 'btn btn-success']); ?>
        </br></br>
        <table class="table table-bordered">
        <tr class="active">
            <th width="5%">ID</th>
            <th>TITULO</th>
            <th>DESCRIÇÃO</th>
            <th>PRIORIDADE</th>
            <th class="actions">AÇÕES</th>
        </tr>

    <?php
    foreach ($tarefas as $tarefa): ?>
        <tr class="info">
            <td><?php echo $tarefa->id; ?></td>
            <td><?php echo $tarefa->titulo; ?></td>
            <td><?php echo $tarefa->descricao; ?></td>
            <td><?php echo $tarefa->prioridade; ?></td>
            <td><?php echo $this->Html->link('Ver', array('action' => 'view', $tarefa->id), ['class' => 'btn btn-info']); ?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $tarefa->id), ['class' => 'btn btn-default']); ?>
                <?php echo $this->Form->postlink(
                    'Excluir', array(
                        'action' => 'delete',
                        $tarefa->id), array('confirm' => 'Você tem certeza que quer excluir essa tarefa?', 'class' => 'btn btn-danger')
                ); ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
        <ul class="pagination">
        <?php
           
            echo $this->Paginator->prev('< ' . __('Anterior'));
            echo $this->Paginator->next(__('Próximo') . ' >');
        ?>
        </ul>
    </div>
</div>
