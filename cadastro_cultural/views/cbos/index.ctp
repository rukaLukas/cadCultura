<div class="cbos index">
	<h2><?php __('Cbos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codcbo');?></th>
			<th><?php echo $this->Paginator->sort('nomcbo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cbos as $cbo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cbo['Cbo']['id']; ?>&nbsp;</td>
		<td><?php echo $cbo['Cbo']['codcbo']; ?>&nbsp;</td>
		<td><?php echo $cbo['Cbo']['nomcbo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cbo['Cbo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cbo['Cbo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cbo['Cbo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cbo['Cbo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cbo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipologias', true), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>