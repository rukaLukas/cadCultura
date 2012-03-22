<div class="vistos form">
<?php echo $this->Form->create('Visto');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Visto', true)); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Vistos', true)), array('action' => 'index'));?></li>		
	</ul>
</div>