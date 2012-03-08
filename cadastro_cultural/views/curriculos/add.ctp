
<!--<div class="curriculos form">-->


<?php echo $this->Form->create('Curriculo');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Curriculo', true)); ?></legend>
	<?php
		//echo $this->Html->div('listaCurriculos', 'conteudo curriculo', array('id' => 'listaCurriculos'));
		echo $this->Form->input('descricao');
		echo $this->Form->input('organizacao_responsavel');
		echo $this->Form->input('data', array('dateFormat' => 'DMY'));
		echo $this->Form->input('funcao_exercida_id', array('empty' => true));
		//echo $this->Form->input('pf_id');
		echo $this->Form->input('Produto');
	?>
	</fieldset>
<?php  //echo $this->Form->end(__('Salvar Currículo', array('id' => 'bt'), true));?>
<!--</div>-->
<!--<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Função Exercidas', true)), array('controller' => 'funcao_exercidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função Exercida', true)), array('controller' => 'funcao_exercidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Multimidias', true)), array('controller' => 'multimidias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Multimidia', true)), array('controller' => 'multimidias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Produtos', true)), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Produto', true)), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->