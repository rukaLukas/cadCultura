<div class="cnae index">
	<h2><?php __('Cnae');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nomcnae');?></th>
			<th><?php echo $this->Paginator->sort('codcnae');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cnae as $cnaes):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cnaes['Cnae']['id']; ?>&nbsp;</td>
		<td><?php echo $cnaes['Cnae']['nomcnae']; ?>&nbsp;</td>
		<td><?php echo $cnaes['Cnae']['codcnae']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cnaes['Cnae']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cnaes['Cnae']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cnaes['Cnae']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cnaes['Cnae']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Cnae', true)), array('action' => 'add')); ?></li>		
	</ul>
</div>