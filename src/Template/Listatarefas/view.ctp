<div style="text-align: center;">
	<h1><?= h($listatarefa->nomeTarefa) ?></h1>
</div>
<p><?= h($listatarefa->descricao) ?></p>
<p><small>Data da criação: <?= $listatarefa->created->format(DATE_RSS) ?></small></p>
<div style="text-align: right;">
	<button ><?= $this->Html->link("Voltar", ['action' => 'index'], ['style' => 'color:white !important']) ?></button>
</div>