<div class="pfsTipologias index">
	<h2><?php __('Pfs Tipologias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pf_id');?></th>
			<th><?php echo $this->Paginator->sort('tipologia_id');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pfsTipologias as $pfsTipologia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pfsTipologia['PfsTipologia']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pfsTipologia['Pf']['nome_artistico'], array('controller' => 'pfs', 'action' => 'view', $pfsTipologia['Pf']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pfsTipologia['Tipologia']['id'], array('controller' => 'tipologias', 'action' => 'view', $pfsTipologia['Tipologia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $pfsTipologia['PfsTipologia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $pfsTipologia['PfsTipologia']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $pfsTipologia['PfsTipologia']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $pfsTipologia['PfsTipologia']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pfs Tipologia', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>