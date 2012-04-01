<div class="contatos index">
	<h2><?php __('Contatos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('desc');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contatos as $contato):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contato['Contato']['id']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['desc']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['data']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $contato['Contato']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $contato['Contato']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $contato['Contato']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Contato', true)), array('action' => 'add')); ?></li>
	</ul>
</div>