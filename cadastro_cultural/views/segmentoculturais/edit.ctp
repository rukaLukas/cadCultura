<div class="segmentoculturais form">
<?php echo $this->Form->create('Segmentocultural');?>
	<fieldset>
 		<legend><?php __('Edit Segmentocultural'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Segmentocultural.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Segmentocultural.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Segmentoculturais', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipologias', true), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>