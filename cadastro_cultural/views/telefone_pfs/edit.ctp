<div class="telefonePfs form">
<?php echo $this->Form->create('TelefonePf');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Telefone Pf', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('telefone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('TelefonePf.pf_id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('TelefonePf.pf_id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Telefone Pfs', true)), array('action' => 'index'));?></li>
	</ul>
</div>