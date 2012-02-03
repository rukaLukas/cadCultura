<div class="tipologias form">
<?php echo $this->Form->create('Tipologia');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Tipologia', true)); ?></legend>
	<?php
		echo $this->Form->input('segmento_cultural');
		echo $this->Form->input('ocupacao_id');
		echo $this->Form->input('funcao_id');
		echo $this->Form->input('tempo_atuacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Ocupações', true)), array('controller' => 'ocupacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('controller' => 'ocupacoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Funções', true)), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função', true)), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>