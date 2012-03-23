<div class="pfsTipologias form">
<?php echo $this->Form->create('PfsTipologia');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Pfs Tipologia', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pf_id');
		echo $this->Form->input('tipologia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('PfsTipologia.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('PfsTipologia.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs Tipologias', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>