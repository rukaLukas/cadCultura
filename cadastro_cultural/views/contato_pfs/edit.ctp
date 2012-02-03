<div class="contatoPfs form">
<?php echo $this->Form->create('ContatoPf');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Contato Pf', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('telefone_pf_id');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('site');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('ContatoPf.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('ContatoPf.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Contato Pfs', true)), array('action' => 'index'));?></li>
	</ul>
</div>