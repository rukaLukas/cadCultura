<div class="curriculosProdutos form">
<?php echo $this->Form->create('CurriculosProduto');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Curriculos Produto', true)); ?></legend>
	<?php
		echo $this->Form->input('produto_id');
		echo $this->Form->input('curriculo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos Produtos', true)), array('action' => 'index'));?></li>
	</ul>
</div>