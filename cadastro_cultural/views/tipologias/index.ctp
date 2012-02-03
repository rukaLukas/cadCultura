<div class="tipologias index">
	<h2><?php __('Tipologias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('segmento_cultural');?></th>
			<th><?php echo $this->Paginator->sort('ocupacao_id');?></th>
			<th><?php echo $this->Paginator->sort('funcao_id');?></th>
			<th><?php echo $this->Paginator->sort('tempo_atuacao');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipologias as $tipologia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipologia['Tipologia']['id']; ?>&nbsp;</td>
		<td><?php echo $tipologia['Tipologia']['segmento_cultural']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tipologia['Ocupacao']['descricao'], array('controller' => 'ocupacoes', 'action' => 'view', $tipologia['Ocupacao']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tipologia['Funcao']['descricao'], array('controller' => 'funcoes', 'action' => 'view', $tipologia['Funcao']['id'])); ?>
		</td>
		<td><?php echo $tipologia['Tipologia']['tempo_atuacao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $tipologia['Tipologia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $tipologia['Tipologia']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $tipologia['Tipologia']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $tipologia['Tipologia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('próxima', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Ocupações', true)), array('controller' => 'ocupacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('controller' => 'ocupacoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Funções', true)), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função', true)), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>