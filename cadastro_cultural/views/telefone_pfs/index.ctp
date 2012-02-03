<div class="telefonePfs index">
	<h2><?php __('Telefone Pfs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('telefone');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($telefonePfs as $telefonePf):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $telefonePf['TelefonePf']['id']; ?>&nbsp;</td>
		<td><?php echo $telefonePf['TelefonePf']['telefone']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $telefonePf['TelefonePf']['pf_id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $telefonePf['TelefonePf']['pf_id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $telefonePf['TelefonePf']['pf_id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $telefonePf['TelefonePf']['pf_id'])); ?>
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
		<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('próxima', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Telefone Pf', true)), array('action' => 'add')); ?></li>
	</ul>
</div>