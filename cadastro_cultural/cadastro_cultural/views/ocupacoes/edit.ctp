<div class="ocupacoes form">
<?php echo $this->Form->create('Ocupacao');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Ocupação', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('segmento_cultural_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('Ocupacao.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('Ocupacao.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Ocupações', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Segmento Culturais', true)), array('controller' => 'segmento_culturais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Segmento Cultural', true)), array('controller' => 'segmento_culturais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Funções', true)), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função', true)), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
	</ul>
</div>