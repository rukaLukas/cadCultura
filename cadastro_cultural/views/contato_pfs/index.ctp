<div class="contatoPfs index">
	<h2><?php __('Contato Pfs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('telefone_pf_id');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('site');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contatoPfs as $contatoPf):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contatoPf['ContatoPf']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contatoPf['TelefonePf']['telefone'], array('controller' => 'telefone_pfs', 'action' => 'view', $contatoPf['TelefonePf']['pf_id'])); ?>
		</td>
		<td><?php echo $contatoPf['ContatoPf']['fax']; ?>&nbsp;</td>
		<td><?php echo $contatoPf['ContatoPf']['email']; ?>&nbsp;</td>
		<td><?php echo $contatoPf['ContatoPf']['site']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $contatoPf['ContatoPf']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $contatoPf['ContatoPf']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $contatoPf['ContatoPf']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $contatoPf['ContatoPf']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Contato Pf', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Telefone Pfs', true)), array('controller' => 'telefone_pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Telefone Pf', true)), array('controller' => 'telefone_pfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>