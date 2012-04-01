<div class="contatos form">
<?php echo $this->Form->create('Contato');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Contato', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('desc');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('Contato.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('Contato.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Contatos', true)), array('action' => 'index'));?></li>
	</ul>
</div>