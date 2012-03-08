<div class="cnae index">
	<h2><?php __('Atividades Econômicas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Nome', 'nomcnae');?></th>
			<th><?php echo $this->Paginator->sort('Código', 'codcnae');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($atividades as $atividadess):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $atividadess['Atividade']['id']; ?>&nbsp;</td>
		<td><?php echo $atividadess['Atividade']['nomcnae']; ?>&nbsp;</td>
		<td><?php echo $atividadess['Atividade']['codcnae']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $atividadess['Atividade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $atividadess['Atividade']['id'])); ?>
			<?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $atividadess['Atividade']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $atividadess['Atividade']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('proxima', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Nova %s', true), __('Atividade', true)), array('action' => 'add')); ?></li>		
	</ul>
</div>