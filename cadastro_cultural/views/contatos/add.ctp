<div class="contatos form">
<?php echo $this->Form->create('Contato');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Contato', true)); ?></legend>
	<?php
		echo $this->Form->input('desc');
		echo $this->Form->input('data', array('type' => 'text'));		
		echo $this->Form->input('Teste.0.email', array('type' => 'text'));
		echo $this->Form->input('Teste.0.telefone', array('type' => 'text'));
		echo $this->Form->input('Teste.1.email', array('type' => 'text'));
		echo $this->Form->input('Teste.1.telefone', array('type' => 'text'));
		echo $this->Form->input('Teste.2.email', array('type' => 'text'));
		echo $this->Form->input('Teste.2.telefone', array('type' => 'text'));
	?>	
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Contatos', true)), array('action' => 'index'));?></li>
	</ul>
</div>