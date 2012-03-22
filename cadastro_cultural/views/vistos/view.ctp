<div class="vistos view">
<h2><?php  __('Visto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uf['Visto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uf['Visto']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uf['Visto']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uf['Visto']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Visto', true)), array('action' => 'edit', $uf['Visto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Visto', true)), array('action' => 'delete', $uf['Visto']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $uf['Visto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Vistos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Visto', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Cidades', true)), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Cidade', true)), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('%s relacionados', true), __('Cidades', true));?></h3>
	<?php if (!empty($uf['Cidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Visto Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uf['Cidade'] as $cidade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cidade['id'];?></td>
			<td><?php echo $cidade['uf_id'];?></td>
			<td><?php echo $cidade['descricao'];?></td>
			<td><?php echo $cidade['created'];?></td>
			<td><?php echo $cidade['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cidades', 'action' => 'view', $cidade['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cidades', 'action' => 'edit', $cidade['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'cidades', 'action' => 'delete', $cidade['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $cidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Cidade', true)), array('controller' => 'cidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
