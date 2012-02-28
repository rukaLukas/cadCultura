<div class="paises view">
<h2><?php  __('Pais');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Pais', true)), array('action' => 'edit', $pais['Pais']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Excluir %s', true), __('Pais', true)), array('action' => 'delete', $pais['Pais']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $pais['Pais']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Paises', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pais', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('controller' => 'pfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('%s relacionados', true), __('Pfs', true));?></h3>
	<?php if (!empty($pais['Pf'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nacionalidade Id'); ?></th>
		<th><?php __('Naturalidade Id'); ?></th>
		<th><?php __('Expedidor Rg Id'); ?></th>
		<th><?php __('Curriculo Id'); ?></th>
		<th><?php __('Cidade Id'); ?></th>
		<th><?php __('Escolaridade Id'); ?></th>
		<th><?php __('Tipologia Id'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Nome Artistico'); ?></th>
		<th><?php __('Naturalizado'); ?></th>
		<th><?php __('Data Naturalização'); ?></th>
		<th><?php __('Tipo Visto'); ?></th>
		<th><?php __('Data Validade Visto'); ?></th>
		<th><?php __('Data Nascimento'); ?></th>
		<th><?php __('Sexo'); ?></th>
		<th><?php __('Cpf'); ?></th>
		<th><?php __('Rg'); ?></th>
		<th><?php __('Data Rg'); ?></th>
		<th><?php __('Ano Graduação'); ?></th>
		<th><?php __('Curso'); ?></th>
		<th><?php __('Profissão'); ?></th>
		<th><?php __('Logradouro'); ?></th>
		<th><?php __('Numero'); ?></th>
		<th><?php __('Complemento'); ?></th>
		<th><?php __('Bairro'); ?></th>
		<th><?php __('Cep'); ?></th>
		<th><?php __('Comprovante'); ?></th>
		<th><?php __('Representante Oficial'); ?></th>
		<th><?php __('Representante Nome'); ?></th>
		<th><?php __('Representante Cpf'); ?></th>
		<th><?php __('Representante Rg'); ?></th>
		<th><?php __('Representante Dataexpedição Rg'); ?></th>
		<th><?php __('Representante Expedidor Rg'); ?></th>
		<th><?php __('Representante Telefone'); ?></th>
		<th><?php __('Representante Celular'); ?></th>
		<th><?php __('Representante Email'); ?></th>
		<th><?php __('Representante Delegação'); ?></th>
		<th><?php __('Deletado'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pais['Pf'] as $pf):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pf['id'];?></td>
			<td><?php echo $pf['nacionalidade_id'];?></td>
			<td><?php echo $pf['naturalidade_id'];?></td>
			<td><?php echo $pf['expedidor_rg_id'];?></td>
			<td><?php echo $pf['curriculo_id'];?></td>
			<td><?php echo $pf['cidade_id'];?></td>
			<td><?php echo $pf['escolaridade_id'];?></td>
			<td><?php echo $pf['tipologia_id'];?></td>
			<td><?php echo $pf['pais_id'];?></td>
			<td><?php echo $pf['nome'];?></td>
			<td><?php echo $pf['nome_artistico'];?></td>
			<td><?php echo $pf['naturalizado'];?></td>
			<td><?php echo $pf['data_naturalizacao'];?></td>
			<td><?php echo $pf['tipo_visto'];?></td>
			<td><?php echo $pf['data_validade_visto'];?></td>
			<td><?php echo $pf['data_nascimento'];?></td>
			<td><?php echo $pf['sexo'];?></td>
			<td><?php echo $pf['cpf'];?></td>
			<td><?php echo $pf['rg'];?></td>
			<td><?php echo $pf['data_rg'];?></td>
			<td><?php echo $pf['ano_graduacao'];?></td>
			<td><?php echo $pf['curso'];?></td>
			<td><?php echo $pf['profissao'];?></td>
			<td><?php echo $pf['logradouro'];?></td>
			<td><?php echo $pf['numero'];?></td>
			<td><?php echo $pf['complemento'];?></td>
			<td><?php echo $pf['bairro'];?></td>
			<td><?php echo $pf['cep'];?></td>
			<td><?php echo $pf['comprovante'];?></td>
			<td><?php echo $pf['representante_oficial'];?></td>
			<td><?php echo $pf['representante_nome'];?></td>
			<td><?php echo $pf['representante_cpf'];?></td>
			<td><?php echo $pf['representante_rg'];?></td>
			<td><?php echo $pf['representante_dataexpedicao_rg'];?></td>
			<td><?php echo $pf['representante_expedidor_rg'];?></td>
			<td><?php echo $pf['representante_telefone'];?></td>
			<td><?php echo $pf['representante_celular'];?></td>
			<td><?php echo $pf['representante_email'];?></td>
			<td><?php echo $pf['representante_delegacao'];?></td>
			<td><?php echo $pf['deletado'];?></td>
			<td><?php echo $pf['created'];?></td>
			<td><?php echo $pf['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'pfs', 'action' => 'view', $pf['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'pfs', 'action' => 'edit', $pf['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'pfs', 'action' => 'delete', $pf['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $pf['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('controller' => 'pfs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
