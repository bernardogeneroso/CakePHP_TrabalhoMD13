<!-- File: src/Template/Listatarefas/index.ctp  (edit links added) -->

<h2>Lista de <a href="">Boar</a>ds <a href="">dos</a> Utiliza<a href="">dores</a></h2>
<table style="background-color: #D3D3D3;">
    <tr>
        <th>Id</th>
		<th>Id Utilizador</th>
		<th>Id Board</th>
		<th>Criação</th>
    </tr>

<?php foreach ($boardsutilizadores as $arraylista): ?>
    <tr>
        <td>
        	<?= $this->Html->link($arraylista->id, ['action' => 'view', $arraylista->id]) ?>
        </td>
        <td>
            <?= $arraylista->has('id_user') ? $this->Html->link($arraylista->id_user, ['controller' => 'Users', 'action' => 'view', $arraylista->id_user]) : '' ?>
        </td>
        <td>
           <?= $arraylista->has('id_board') ? $this->Html->link($arraylista->id_board, ['controller' => 'Boards', 'action' => 'view', $arraylista->id_board]) : '' ?>
        </td>
        <td>
           <?= $arraylista->created ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>