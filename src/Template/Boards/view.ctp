<div style="text-align: center;">
	<h1><?= h($board->nomeBoard) ?></h1>
</div>
<p><?= h($board->descricao) ?></p>
<p><small>Data da criação: <?= $board->created->format(DATE_RSS) ?></small></p>
<div style="text-align: right;">
	<button ><?= $this->Html->link("Voltar", ['action' => 'index'], ['style' => 'color:white !important']) ?></button>
</div>