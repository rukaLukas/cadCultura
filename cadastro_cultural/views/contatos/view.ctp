<div class="contatos view">
<h2><?php  __('Contato');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['desc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['data']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Contato', true)), array('action' => 'edit', $contato['Contato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Contato', true)), array('action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $contato['Contato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Contatos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Contato', true)), array('action' => 'add')); ?> </li>
	</ul>
</div>
