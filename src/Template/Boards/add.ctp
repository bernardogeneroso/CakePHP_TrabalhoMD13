<h1>Adicionar Board</h1>
<?php
    echo $this->Form->create($board);
    echo $this->Form->input('nomeBoard');
    echo $this->Form->input('descricao', array('rows' => '3', 'label'=>'Descrição'));
    echo $this->Form->input('created', array('label'=>'Data de Vencimento'));
    echo $this->Form->button(__('Guardar Board'));
    echo $this->Form->end();
?>