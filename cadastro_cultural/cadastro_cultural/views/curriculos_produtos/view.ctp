<div class="curriculosProdutos view">
<h2><?php  __('Curriculos Produto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculosProduto['CurriculosProduto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Produto Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculosProduto['CurriculosProduto']['produto_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curriculo Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculosProduto['CurriculosProduto']['curriculo_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Curriculos Produto', true)), array('action' => 'edit', $curriculosProduto['CurriculosProduto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Curriculos Produto', true)), array('action' => 'delete', $curriculosProduto['CurriculosProduto']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $curriculosProduto['CurriculosProduto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos Produtos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculos Produto', true)), array('action' => 'add')); ?> </li>
	</ul>
</div>
