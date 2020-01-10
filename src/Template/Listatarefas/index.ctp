<!-- File: src/Template/Listatarefas/index.ctp  -->

<h2>Lista de <a href="">Tarefas</a></h2>
<p><?= $this->Html->link("Adicionar Tarefa", ['action' => 'add']) ?></p>
<table style="background-color: #D3D3D3;">
    <tr>
        <th>Id</th>
		<th>Título</th>
		<th>Data de Vencimento</th>
        <th>Ações</th>
    </tr>

    <!-- No código em baixo utilizamos um foreach para mostrar-mos todos os valores que estão na tabela listatarefas -->

<?php foreach ($listatarefas as $arraylista): ?>
    <tr>
        <td><?= $arraylista->id ?></td>
        <td>
            <?= $this->Html->link($arraylista->nomeTarefa, ['action' => 'view', $arraylista->id]) ?>
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
