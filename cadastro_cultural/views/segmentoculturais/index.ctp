<div class="segmentoculturais index">
	<h2><?php __('Segmentos Culturais');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id');?></th>-->
			<th><?php echo $this->Paginator->sort('Nome','nomsegmento');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($segmentoculturais as $segmentocultural):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!--<td><?php echo $segmentocultural['Segmentocultural']['id']; ?>&nbsp;</td>-->
		<td><?php echo $segmentocultural['Segmentocultural']['nome']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $segmentocultural['Segmentocultural']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $segmentocultural['Segmentocultural']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $segmentocultural['Segmentocultural']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $segmentocultural['Segmentocultural']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%', true)
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Segmento Cultural', true)), array('action' => 'add')); ?></li>
	</ul>
</div>