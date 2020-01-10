<h1>Utiliza<a style="color: #D38006;">dor</a>: <?= h($user->username) ?></h1>
<p><?= 'Password: ', h($user->password) ?></p>
<p><small>Data da criação: <?= $user->created->format(DATE_RSS) ?></small></p>
<div style="text-align: right;">
	<button ><?= $this->Html->link("Voltar", ['action' => 'index'], ['style' => 'color:white !important']) ?></button>
</div>