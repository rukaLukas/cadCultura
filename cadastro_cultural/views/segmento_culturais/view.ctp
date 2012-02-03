<div class="segmentoCulturais view">
<h2><?php  __('Segmento Cultural');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $segmentoCultural['SegmentoCultural']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $segmentoCultural['SegmentoCultural']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $segmentoCultural['SegmentoCultural']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $segmentoCultural['SegmentoCultural']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $segmentoCultural['SegmentoCultural']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Segmento Cultural', true)), array('action' => 'edit', $segmentoCultural['SegmentoCultural']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Segmento Cultural', true)), array('action' => 'delete', $segmentoCultural['SegmentoCultural']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $segmentoCultural['SegmentoCultural']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Segmento Culturais', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Segmento Cultural', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Ocupações', true)), array('controller' => 'ocupacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('controller' => 'ocupacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('%s relacionados', true), __('Ocupações', true));?></h3>
	<?php if (!empty($segmentoCultural['Ocupacao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Segmento Cultural Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($segmentoCultural['Ocupacao'] as $ocupacao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ocupacao['id'];?></td>
			<td><?php echo $ocupacao['segmento_cultural_id'];?></td>
			<td><?php echo $ocupacao['descricao'];?></td>
			<td><?php echo $ocupacao['tipo'];?></td>
			<td><?php echo $ocupacao['created'];?></td>
			<td><?php echo $ocupacao['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'ocupacoes', 'action' => 'view', $ocupacao['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'ocupacoes', 'action' => 'edit', $ocupacao['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'ocupacoes', 'action' => 'delete', $ocupacao['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $ocupacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('controller' => 'ocupacoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
