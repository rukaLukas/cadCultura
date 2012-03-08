<div class="cnae view">
<h2><?php  __('Atividade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cnaes['Atividade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nomcnae'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cnaes['Atividade']['nomcnae']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codcnae'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cnaes['Atividade']['codcnae']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>		
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Atividade', true)), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(sprintf(__('Deletar %s', true), __('Atividade', true)), array('controller' => 'atividades', 'action' => 'delete')); ?> </li>-->
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Atividade', true)), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Atividade', true)), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
