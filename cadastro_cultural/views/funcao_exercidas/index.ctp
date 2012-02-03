<div class="funcaoExercidas index">
	<h2><?php __('Função Exercidas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($funcaoExercidas as $funcaoExercida):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $funcaoExercida['FuncaoExercida']['id']; ?>&nbsp;</td>
		<td><?php echo $funcaoExercida['FuncaoExercida']['descricao']; ?>&nbsp;</td>
		<td><?php echo $funcaoExercida['FuncaoExercida']['created']; ?>&nbsp;</td>
		<td><?php echo $funcaoExercida['FuncaoExercida']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $funcaoExercida['FuncaoExercida']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $funcaoExercida['FuncaoExercida']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $funcaoExercida['FuncaoExercida']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $funcaoExercida['FuncaoExercida']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função Exercida', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos', true)), array('controller' => 'curriculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('controller' => 'curriculos', 'action' => 'add')); ?> </li>
	</ul>
</div>