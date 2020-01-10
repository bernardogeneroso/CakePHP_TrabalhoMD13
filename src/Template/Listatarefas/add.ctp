<h1>Adicionar Tarefa</h1>
<?php
    echo $this->Form->create($listatarefa);
    echo $this->Form->input('nomeTarefa');
    echo $this->Form->input('descricao', array('rows' => '3', 'label'=>'Descrição'));
    echo $this->Form->input('created', array('label'=>'Data de Vencimento')); 
    echo $this->Form->button(__('Guardar Tarefa'));
    echo $this->Form->end();
?>