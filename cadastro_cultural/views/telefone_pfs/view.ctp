<div class="telefonePfs view">
<h2><?php  __('Telefone Pf');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $telefonePf['TelefonePf']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $telefonePf['TelefonePf']['telefone']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Telefone Pf', true)), array('action' => 'edit', $telefonePf['TelefonePf']['pf_id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Telefone Pf', true)), array('action' => 'delete', $telefonePf['TelefonePf']['pf_id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $telefonePf['TelefonePf']['pf_id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Telefone Pfs', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Telefone Pf', true)), array('action' => 'add')); ?> </li>
	</ul>
</div>
