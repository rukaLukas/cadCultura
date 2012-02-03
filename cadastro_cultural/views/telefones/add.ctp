<div class="telefones form">
<?php echo $this->Form->create('Telefone');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Telefone', true)); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Telefones', true)), array('action' => 'index'));?></li>
	</ul>
</div>