<div class="ocupacoes view">
<h2><?php  __('Ocupação');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ocupacao['Ocupacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Segmento Cultural'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ocupacao['SegmentoCultural']['descricao'], array('controller' => 'segmento_culturais', 'action' => 'view', $ocupacao['SegmentoCultural']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ocupacao['Ocupacao']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ocupacao['Ocupacao']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ocupacao['Ocupacao']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ocupacao['Ocupacao']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Ocupação', true)), array('action' => 'edit', $ocupacao['Ocupacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Ocupação', true)), array('action' => 'delete', $ocupacao['Ocupacao']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $ocupacao['Ocupacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Ocupações', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Ocupação', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Segmento Culturais', true)), array('controller' => 'segmento_culturais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Segmento Cultural', true)), array('controller' => 'segmento_culturais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Funções', true)), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função', true)), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('%s relacionados', true), __('Tipologias', true));?></h3>
	<?php if (!empty($ocupacao['Tipologia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Segmento Cultural'); ?></th>
		<th><?php __('Ocupação Id'); ?></th>
		<th><?php __('Função Id'); ?></th>
		<th><?php __('Tempo Atuação'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ocupacao['Tipologia'] as $tipologia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tipologia['id'];?></td>
			<td><?php echo $tipologia['segmento_cultural'];?></td>
			<td><?php echo $tipologia['ocupacao_id'];?></td>
			<td><?php echo $tipologia['funcao_id'];?></td>
			<td><?php echo $tipologia['tempo_atuacao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'tipologias', 'action' => 'view', $tipologia['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'tipologias', 'action' => 'edit', $tipologia['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'tipologias', 'action' => 'delete', $tipologia['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $tipologia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('%s relacionados', true), __('Funções', true));?></h3>
	<?php if (!empty($ocupacao['Funcao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ocupação Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ocupacao['Funcao'] as $funcao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $funcao['id'];?></td>
			<td><?php echo $funcao['ocupacao_id'];?></td>
			<td><?php echo $funcao['descricao'];?></td>
			<td><?php echo $funcao['tipo'];?></td>
			<td><?php echo $funcao['created'];?></td>
			<td><?php echo $funcao['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'funcoes', 'action' => 'view', $funcao['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'funcoes', 'action' => 'edit', $funcao['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'funcoes', 'action' => 'delete', $funcao['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $funcao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Função', true)), array('controller' => 'funcoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
