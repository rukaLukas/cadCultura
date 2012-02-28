<div class="segmentoCulturais form">
<?php echo $this->Form->create('SegmentoCultural');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Segmento Cultural', true)); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Segmento Culturais', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Ocupações', true)), array('controller' => 'ocupacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('controller' => 'ocupacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>