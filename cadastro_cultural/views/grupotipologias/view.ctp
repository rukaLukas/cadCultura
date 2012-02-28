<div class="grupotipologias view">
<h2><?php  __('Grupotipologia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupotipologia['Grupotipologia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Segmentocultural'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($grupotipologia['Segmentocultural']['nome'], array('controller' => 'segmentoculturais', 'action' => 'view', $grupotipologia['Segmentocultural']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupotipologia['Grupotipologia']['nome']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupotipologia', true), array('action' => 'edit', $grupotipologia['Grupotipologia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Grupotipologia', true), array('action' => 'delete', $grupotipologia['Grupotipologia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupotipologia['Grupotipologia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupotipologias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupotipologia', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Segmentoculturais', true), array('controller' => 'segmentoculturais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Segmentocultural', true), array('controller' => 'segmentoculturais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipologias', true), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tipologias');?></h3>
	<?php if (!empty($grupotipologia['Tipologia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Grupotipologia Id'); ?></th>
		<th><?php __('Segmentocultural Id'); ?></th>
		<th><?php __('Cnae Id'); ?></th>
		<th><?php __('Cbo Id'); ?></th>
		<th><?php __('Elo Id'); ?></th>
		<th><?php __('Stsdeletado'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupotipologia['Tipologia'] as $tipologia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tipologia['id'];?></td>
			<td><?php echo $tipologia['grupotipologia_id'];?></td>
			<td><?php echo $tipologia['segmentocultural_id'];?></td>
			<td><?php echo $tipologia['cnae_id'];?></td>
			<td><?php echo $tipologia['cbo_id'];?></td>
			<td><?php echo $tipologia['elo_id'];?></td>
			<td><?php echo $tipologia['stsdeletado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tipologias', 'action' => 'view', $tipologia['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tipologias', 'action' => 'edit', $tipologia['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tipologias', 'action' => 'delete', $tipologia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipologia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
