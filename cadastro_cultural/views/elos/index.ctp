<div class="cbos index">
	<h2><?php __('Elos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('codcbo');?></th>-->
			<th><?php echo $this->Paginator->sort('Nome','nomelo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($elos as $elo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!--<td><?php echo $elo['Elo']['id']; ?>&nbsp;</td>-->
		<!--<td><?php echo $elo['Elo']['nomelo']; ?>&nbsp;</td>-->
		<td><?php echo $elo['Elo']['nomelo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $elo['Elo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $elo['Elo']['id'])); ?>
			<?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $elo['Elo']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $elo['Elo']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Elo', true)), array('action' => 'add')); ?></li>		
		<li><?php echo $this->Html->link(sprintf(__('%s', true), __('Definir Relacionamento', true)), array('action' => 'elo_relacionamento')); ?></li>
		<!--<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('action' => 'add')); ?></li>-->
	</ul>
</div>