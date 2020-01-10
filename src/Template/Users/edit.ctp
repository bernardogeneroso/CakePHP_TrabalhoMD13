<h1>Editar Utilizador</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->input('username', array('label'=>'Utilizador'));
    echo $this->Form->input('password');
    echo $this->Form->input('created', array('label'=>'Data de Criação'));
    echo $this->Form->button(__('Guardar Utilizador'));
    echo $this->Form->end();
?>