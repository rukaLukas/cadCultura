<div class="cnae view">
<h2><?php  __('Cnaes');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cnaes['Cnaes']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nomcnae'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cnaes['Cnaes']['nomcnae']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codcnae'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cnaes['Cnaes']['codcnae']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cnaes', true), array('action' => 'edit', $cnaes['Cnaes']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cnaes', true), array('action' => 'delete', $cnaes['Cnaes']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cnaes['Cnaes']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnae', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnaes', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
