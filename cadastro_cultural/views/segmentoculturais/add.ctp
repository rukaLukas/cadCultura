<div class="segmentoculturais form">
<?php echo $this->Form->create('Segmentocultural');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Segmento Cultural', true)); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Segmento Cultural', true)), array('action' => 'index'));?></li>		
	</ul>
</div>