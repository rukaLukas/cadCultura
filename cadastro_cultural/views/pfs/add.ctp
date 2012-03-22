<?php
// Incluir o jQuery ao projeto
// Neste exemplo estou importando a jquery.tablesorter tamb�m
// O segundo par�metro (false) � para indicar que vai no <head> e n�o no local onde est� sendo executado
$javascript->link(array('jquery','jquery.validate','jquery.maskedinput','scriptAddPf'), false);
  
//echo $this->element('tiny_mce');
?>



<div class="pfs form">
<?php echo $this->Form->create('Pf', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Pf', true)); ?></legend>
	<?php				
		//echo "<a href='#' id='teste' class='btnRemoveTelefone'>hjhj</a>";
		$sexo = array('M' => 'Masculino', 'F' => 'Feminino');
		$naturalizado = array('S' => 'Sim', 'N' => 'Não');
		echo $this->Form->input('nacionalidade_id');
		echo $this->Form->input('naturalidade_id');
		echo $this->Form->input('expedidor_rg_id');
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('escolaridade_id');
		//echo $this->Form->input('tipologia_id');
		echo $this->Form->input('pais_id', array('label' => 'País'));
		
		$opcoesAtividade = array('0'=>'Selecione um Segmento');
		$opcoesElo = array('0'=>'Selecione uma Atividade');
		echo $this->Form->input('segmento_id', array('empty' => true));
		$atividade = $this->Form->input('atividade', array('type' => 'select', 
													'label' => 'Atividade', 
													'options' => $opcoesAtividade
													));
		$elo = $this->Form->input('elo', array('type' => 'select', 
													'label' => 'Elo', 
													'options' => $opcoesElo
													));																								
		echo $this->Html->div('', $atividade, array('id' => 'divComboCBO'));
		//echo $this->Html->div('', $elo, array('id' => 'divComboElo'));		
				
		
		echo $this->Form->input('nome');
		echo $this->Form->input('nome_artistico');
		//echo $this->Form->input('naturalizado');
		echo $this->Form->input('naturalizado', array('type' => 'select', 'options' => $naturalizado, 'empty' => true));
		
		$camposNaturalizacao = $this->Form->input('data_naturalizacao', array('dateFormat' => 'DMY'));
		$camposNaturalizacao .= $this->Form->input('visto_id');
		$camposNaturalizacao .= $this->Form->input('data_validade_visto', array('dateFormat' => 'DMY'));
		
		echo $this->Html->div('', $camposNaturalizacao, array('id' => 'divNaturalizacao'));		
		echo $this->Form->input('data_nascimento', array('dateFormat' => 'DMY'));
		echo $this->Form->input('sexo', array('type' => 'select', 'options' => $sexo, 'empty' => true));
		echo $this->Form->input('passaporte');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('data_rg', array('dateFormat' => 'DMY'));
		echo $this->Form->input('ano_graduacao', array('label' => 'Ano Gradução'));
		echo $this->Form->input('curso', array('maxlength' => '100'));
		echo $this->Form->input('profissao', array('label' => 'Profissão'));
		echo $this->Form->input('logradouro');
		echo $this->Form->input('numero', array('label' => 'Número'));
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep');
		//echo $this->Form->input('comprovante');
		echo $this->Form->input('comprovante', array('type'=>'file'));
		echo $this->Form->input('curriculo_anexo', array('type'=>'file', 'label' => 'Curriculos Anexo'));		
				
		$btnAddTel = $form->button('Adicionar telefone', array('id' => 'btnAddTelefone', 'style'=>'margin:0 0 10px 0', 'type'=>'button'));	
		$btnRemoveTel = $form->button('Remover telefone', array('id' => 'btnRemoveTelefone', 'style'=>'margin:0 0 10px 0', 'type'=>'button'));				
		$divFormCurriculo = $this->Html->div('', '', array('id' => 'divFormCurriculo'));		
		$btnAddCurriculo = $form->button('Adicionar currículo', array('id' => 'btnAddCurriculo', 'style'=>'margin:0 0 10px 0', 'type'=>'button'));
		$btnSalvarCurriculo = $this->Form->button('Salvar Curriculo', array('type'=>'button', 'id'=>'btnSalvarCurriculo'));		
		$btnCancelarCurriculo = $this->Form->button('Cancelar', array('type'=>'button', 'id'=>'btnCancelarCurriculo'));
		$focusCurriculo = $this->Form->input('focusCurriculo', array('type' => 'hidden', 'id' => 'focusCurriculo'));
		$listaCurriculos = $this->Html->div('listaCurriculos', $focusCurriculo, array('id' => 'listaCurriculos'));		
		$btnExcluirCurriculo = $this->Form->button('Excluir Curriculos', array('type'=>'button', 'id'=>'btnExcluirCurriculo'));				
				
		echo $this->Html->tag('fieldset', '<legend>Telefones</legend>' . $btnAddTel . $btnRemoveTel . '<br>', array('class' => 'telefones'));			
		echo $this->Html->tag('br', '');
		
		echo $this->Html->tag('fieldset', '<legend>Currículo</legend>' . $this->Html->div('', 'Aguarde carregando...', array('id' => 'loading')) . $listaCurriculos . '<br>' . $btnAddCurriculo . $btnExcluirCurriculo . $divFormCurriculo . $btnSalvarCurriculo . $btnCancelarCurriculo, array('class' => 'curriculos'));		
		
										
		
		//echo $this->Form->input('representante_oficial');
		echo $this->Form->input('representante_nome', array('maxlength' => '100'));
		echo $this->Form->input('representante_cpf');
		echo $this->Form->input('representante_rg');
		echo $this->Form->input('representante_dataexpedicao_rg', array('label' => 'Representante - Data Expedição'));
		echo $this->Form->input('representante_expedidor_rg', array('label' => 'Representante - Expedidor Rg'));
		echo $this->Form->input('representante_telefone');
		echo $this->Form->input('representante_celular');
		echo $this->Form->input('representante_email');
		echo $this->Form->input('representante_delegacao', array('label' => 'Representante Delegação'));
		//echo $this->Form->input('deletado');
		echo $this->Form->input('email');
		echo $this->Form->input('site');
		echo $this->Form->input('fax');
		echo $this->Form->input('contadorCurriculo', array('type' => 'hidden'));
		echo $this->Form->input('cbo', array('type' => 'hidden', 'id' => 'PfAtividade'));
		echo $this->Form->input('elo', array('type' => 'hidden', 'id' => 'PfElo'));
				
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pfs', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Nacionalidades', true)), array('controller' => 'nacionalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Nacionalidade', true)), array('controller' => 'nacionalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Naturalidades', true)), array('controller' => 'naturalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Naturalidade', true)), array('controller' => 'naturalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Expedidor Rgs', true)), array('controller' => 'expedidor_rgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Expedidor Rg', true)), array('controller' => 'expedidor_rgs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Cidades', true)), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Cidade', true)), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Escolaridades', true)), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Escolaridade', true)), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Tipologias', true)), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Tipologia', true)), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Paises', true)), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Pais', true)), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Curriculos', true)), array('controller' => 'curriculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Curriculo', true)), array('controller' => 'curriculos', 'action' => 'add')); ?> </li>
	</ul>
</div>