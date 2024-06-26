<div class="multimidias index">
	<h2><?php __('Multimidias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('multimidia');?></th>
			<th><?php echo $this->Paginator->sort('curriculo_id');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($multimidias as $multimidia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $multimidia['Multimidia']['id']; ?>&nbsp;</td>
		<td><?php echo $multimidia['Multimidia']['multimidia']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($multimidia['Curriculo']['descricao'], array('controller' => 'curriculos', 'action' => 'view', $multimidia['Curriculo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $multimidia['Multimidia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $multimidia['Multimidia']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $multimidia['Multimidia']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $multimidia['Multimidia']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Multimidia', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos', true)), array('controller' => 'curriculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('controller' => 'curriculos', 'action' => 'add')); ?> </li>
	</ul>
</div>