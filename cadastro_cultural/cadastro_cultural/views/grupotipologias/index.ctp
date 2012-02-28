<div class="grupotipologias index">
	<h2><?php __('Grupotipologias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>			
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($grupotipologias as $grupotipologia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $grupotipologia['Grupotipologia']['id']; ?>&nbsp;</td>
		<!--<td>
			<?php echo $this->Html->link($grupotipologia['Segmentocultural']['nome'], array('controller' => 'segmentoculturais', 'action' => 'view', $grupotipologia['Segmentocultural']['id'])); ?>
		</td>-->
		<td><?php echo $grupotipologia['Grupotipologia']['nome']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $grupotipologia['Grupotipologia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $grupotipologia['Grupotipologia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $grupotipologia['Grupotipologia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupotipologia['Grupotipologia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Grupotipologia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Segmentoculturais', true), array('controller' => 'segmentoculturais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Segmentocultural', true), array('controller' => 'segmentoculturais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipologias', true), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>