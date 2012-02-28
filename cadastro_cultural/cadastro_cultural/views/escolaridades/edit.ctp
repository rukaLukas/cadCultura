<div class="escolaridades form">
<?php echo $this->Form->create('Escolaridade');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Escolaridade', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('Escolaridade.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('Escolaridade.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Escolaridades', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>