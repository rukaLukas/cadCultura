<div class="funcaoExercidas view">
<h2><?php  __('Função Exercida');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcaoExercida['FuncaoExercida']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcaoExercida['FuncaoExercida']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcaoExercida['FuncaoExercida']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcaoExercida['FuncaoExercida']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Função Exercida', true)), array('action' => 'edit', $funcaoExercida['FuncaoExercida']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Função Exercida', true)), array('action' => 'delete', $funcaoExercida['FuncaoExercida']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $funcaoExercida['FuncaoExercida']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Função Exercidas', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função Exercida', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos', true)), array('controller' => 'curriculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('controller' => 'curriculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('%s relacionados', true), __('Curriculos', true));?></h3>
	<?php if (!empty($funcaoExercida['Curriculo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Multimidia Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Organização Responsavel'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Produto Id'); ?></th>
		<th><?php __('Função Exercida Id'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($funcaoExercida['Curriculo'] as $curriculo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curriculo['id'];?></td>
			<td><?php echo $curriculo['multimidia_id'];?></td>
			<td><?php echo $curriculo['descricao'];?></td>
			<td><?php echo $curriculo['organizacao_responsavel'];?></td>
			<td><?php echo $curriculo['data'];?></td>
			<td><?php echo $curriculo['produto_id'];?></td>
			<td><?php echo $curriculo['funcao_exercida_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'curriculos', 'action' => 'view', $curriculo['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'curriculos', 'action' => 'edit', $curriculo['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'curriculos', 'action' => 'delete', $curriculo['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $curriculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('controller' => 'curriculos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
