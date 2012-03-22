<div class="paises form">
<?php echo $this->Form->create('Pais');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('País', true)); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Paises', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>