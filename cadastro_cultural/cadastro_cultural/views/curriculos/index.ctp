<div class="curriculos index">
	<h2><?php __('Curriculos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('organizacao_responsavel');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('funcao_exercida_id');?></th>
			<th><?php echo $this->Paginator->sort('pf_id');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($curriculos as $curriculo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $curriculo['Curriculo']['id']; ?>&nbsp;</td>
		<td><?php echo $curriculo['Curriculo']['descricao']; ?>&nbsp;</td>
		<td><?php echo $curriculo['Curriculo']['organizacao_responsavel']; ?>&nbsp;</td>
		<td><?php echo $curriculo['Curriculo']['data']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($curriculo['FuncaoExercida']['descricao'], array('controller' => 'funcao_exercidas', 'action' => 'view', $curriculo['FuncaoExercida']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($curriculo['Pf']['nome_artistico'], array('controller' => 'pfs', 'action' => 'view', $curriculo['Pf']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $curriculo['Curriculo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $curriculo['Curriculo']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $curriculo['Curriculo']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $curriculo['Curriculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Função Exercidas', true)), array('controller' => 'funcao_exercidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função Exercida', true)), array('controller' => 'funcao_exercidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Multimidias', true)), array('controller' => 'multimidias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Multimidia', true)), array('controller' => 'multimidias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Produtos', true)), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Produto', true)), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>