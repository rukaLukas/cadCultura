<div class="contatoPfs form">
<?php echo $this->Form->create('ContatoPf');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Contato Pf', true)); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Contato Pfs', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Telefone Pfs', true)), array('controller' => 'telefone_pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Telefone Pf', true)), array('controller' => 'telefone_pfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>