<div class="cbos view">
<h2><?php  __('Cbo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cbo['Cbo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codcbo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cbo['Cbo']['codcbo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nomcbo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cbo['Cbo']['nomcbo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Cbo', true)), array('action' => 'edit')); ?></li>
		<!--<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Cbo', true)), array('action' => 'delete', $cbo['Cbo']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $cbo['Cbo']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Cbo', true)), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Cbo', true)), array('action' => 'add')); ?></li>									
	</ul>
</div>


<!--
<div class="related">
	<h3><?php __('Related Tipologias');?></h3>
	<?php if (!empty($cbo['Tipologia'])):?>
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
		foreach ($cbo['Tipologia'] as $tipologia):
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
</div>-->
