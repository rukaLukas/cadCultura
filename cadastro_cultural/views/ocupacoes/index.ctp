<div class="ocupacoes index">
	<h2><?php __('Ocupações');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('segmento_cultural_id');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ocupacoes as $ocupacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ocupacao['Ocupacao']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ocupacao['SegmentoCultural']['descricao'], array('controller' => 'segmento_culturais', 'action' => 'view', $ocupacao['SegmentoCultural']['id'])); ?>
		</td>
		<td><?php echo $ocupacao['Ocupacao']['descricao']; ?>&nbsp;</td>
		<td><?php echo $ocupacao['Ocupacao']['tipo']; ?>&nbsp;</td>
		<td><?php echo $ocupacao['Ocupacao']['created']; ?>&nbsp;</td>
		<td><?php echo $ocupacao['Ocupacao']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $ocupacao['Ocupacao']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $ocupacao['Ocupacao']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $ocupacao['Ocupacao']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $ocupacao['Ocupacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Segmento Culturais', true)), array('controller' => 'segmento_culturais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Segmento Cultural', true)), array('controller' => 'segmento_culturais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Funções', true)), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função', true)), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
	</ul>
</div>