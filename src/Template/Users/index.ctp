<!-- File: src/Template/Listatarefas/index.ctp  (edit links added) -->

<h2>Lista de <a href="">Utilizadores</a></h2>
<p><?= $this->Html->link("Adicionar Utilizador", ['action' => 'add']) ?></p>
<table style="background-color: #D3D3D3;">
    <tr>
        <th>Id</th>
		<th>Utilizador</th>
		<th>Password</th>
        <th>Data de Criação</th>
        <th>Ações</th>
    </tr>

<?php foreach ($users as $arraylista): ?>
    <tr>
        <td><?= $arraylista->id ?></td>
        <td>
            <?= $this->Html->link($arraylista->username, ['action' => 'view', $arraylista->id]) ?>
        </td>
        <td>
            <?= $arraylista->password ?>
        </td>
        <td>
            <?= $arraylista->created->format(DATE_RFC1036) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Apagar',
                ['action' => 'delete', $arraylista->id],
                ['confirm' => 'Tem certeza?'])
            ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $arraylista->id]) ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>
