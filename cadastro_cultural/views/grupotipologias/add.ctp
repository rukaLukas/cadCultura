<div class="grupotipologias form">
<?php echo $this->Form->create('Grupotipologia');?>
	<fieldset>
 		<legend><?php __('Add Grupotipologia'); ?></legend>
	<?php
		//echo $this->Form->input('segmentocultural_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grupotipologias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Segmentoculturais', true), array('controller' => 'segmentoculturais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Segmentocultural', true), array('controller' => 'segmentoculturais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipologias', true), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>