<div class="pfs index">
	<h2><?php __('Pfs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nacionalidade_id');?></th>
			<th><?php echo $this->Paginator->sort('naturalidade_id');?></th>
			<th><?php echo $this->Paginator->sort('expedidor_rg_id');?></th>
			<th><?php echo $this->Paginator->sort('curriculo_id');?></th>
			<th><?php echo $this->Paginator->sort('cidade_id');?></th>
			<th><?php echo $this->Paginator->sort('escolaridade_id');?></th>
			<th><?php echo $this->Paginator->sort('tipologia_id');?></th>
			<th><?php echo $this->Paginator->sort('pais_id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('nome_artistico');?></th>
			<th><?php echo $this->Paginator->sort('naturalizado');?></th>
			<th><?php echo $this->Paginator->sort('data_naturalizacao');?></th>
			<th><?php echo $this->Paginator->sort('tipo_visto');?></th>
			<th><?php echo $this->Paginator->sort('data_validade_visto');?></th>
			<th><?php echo $this->Paginator->sort('data_nascimento');?></th>
			<th><?php echo $this->Paginator->sort('sexo');?></th>
			<th><?php echo $this->Paginator->sort('cpf');?></th>
			<th><?php echo $this->Paginator->sort('rg');?></th>
			<th><?php echo $this->Paginator->sort('data_rg');?></th>
			<th><?php echo $this->Paginator->sort('ano_graduacao');?></th>
			<th><?php echo $this->Paginator->sort('curso');?></th>
			<th><?php echo $this->Paginator->sort('profissao');?></th>
			<th><?php echo $this->Paginator->sort('logradouro');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('complemento');?></th>
			<th><?php echo $this->Paginator->sort('bairro');?></th>
			<th><?php echo $this->Paginator->sort('cep');?></th>
			<th><?php echo $this->Paginator->sort('comprovante');?></th>
			<th><?php echo $this->Paginator->sort('representante_oficial');?></th>
			<th><?php echo $this->Paginator->sort('representante_nome');?></th>
			<th><?php echo $this->Paginator->sort('representante_cpf');?></th>
			<th><?php echo $this->Paginator->sort('representante_rg');?></th>
			<th><?php echo $this->Paginator->sort('representante_dataexpedicao_rg');?></th>
			<th><?php echo $this->Paginator->sort('representante_expedidor_rg');?></th>
			<th><?php echo $this->Paginator->sort('representante_telefone');?></th>
			<th><?php echo $this->Paginator->sort('representante_celular');?></th>
			<th><?php echo $this->Paginator->sort('representante_email');?></th>
			<th><?php echo $this->Paginator->sort('representante_delegacao');?></th>
			<th><?php echo $this->Paginator->sort('deletado');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pfs as $pf):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pf['Pf']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pf['Nacionalidade']['descricao'], array('controller' => 'nacionalidades', 'action' => 'view', $pf['Nacionalidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['Naturalidade']['descricao'], array('controller' => 'naturalidades', 'action' => 'view', $pf['Naturalidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['ExpedidorRg']['descricao'], array('controller' => 'expedidor_rgs', 'action' => 'view', $pf['ExpedidorRg']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['Curriculo']['descricao'], array('controller' => 'curriculos', 'action' => 'view', $pf['Curriculo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['Cidade']['descricao'], array('controller' => 'cidades', 'action' => 'view', $pf['Cidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['Escolaridade']['descricao'], array('controller' => 'escolaridades', 'action' => 'view', $pf['Escolaridade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['Tipologia']['id'], array('controller' => 'tipologias', 'action' => 'view', $pf['Tipologia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pf['Pais']['descricao'], array('controller' => 'paises', 'action' => 'view', $pf['Pais']['id'])); ?>
		</td>
		<td><?php echo $pf['Pf']['nome']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['nome_artistico']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['naturalizado']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['data_naturalizacao']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['tipo_visto']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['data_validade_visto']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['data_nascimento']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['sexo']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['cpf']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['rg']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['data_rg']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['ano_graduacao']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['curso']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['profissao']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['logradouro']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['numero']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['complemento']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['bairro']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['cep']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['comprovante']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_oficial']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_nome']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_cpf']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_rg']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_dataexpedicao_rg']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_expedidor_rg']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_telefone']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_celular']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_email']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['representante_delegacao']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['deletado']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['created']; ?>&nbsp;</td>
		<td><?php echo $pf['Pf']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $pf['Pf']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $pf['Pf']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $pf['Pf']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $pf['Pf']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pf', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Nacionalidades', true)), array('controller' => 'nacionalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Nacionalidade', true)), array('controller' => 'nacionalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Naturalidades', true)), array('controller' => 'naturalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Naturalidade', true)), array('controller' => 'naturalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Expedidor Rgs', true)), array('controller' => 'expedidor_rgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Expedidor Rg', true)), array('controller' => 'expedidor_rgs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos', true)), array('controller' => 'curriculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('controller' => 'curriculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Cidades', true)), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Cidade', true)), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Escolaridades', true)), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Escolaridade', true)), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Paises', true)), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pais', true)), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Contatos', true)), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Contato', true)), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Telefones', true)), array('controller' => 'telefones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Telefone', true)), array('controller' => 'telefones', 'action' => 'add')); ?> </li>
	</ul>
</div>