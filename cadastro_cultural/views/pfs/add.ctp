<?php
// Incluir o jQuery ao projeto
// Neste exemplo estou importando a jquery.tablesorter tamb�m
// O segundo par�metro (false) � para indicar que vai no <head> e n�o no local onde est� sendo executado
//$javascript->link(array('jquery','jquery.validate','jquery.maskedinput','scriptAddPf'), false);
?>
<?php echo $html->script('jquery.js'); ?>
<?php echo $html->script('scriptAddPf.js'); ?>
<?php echo $html->script('jquery.validate.js'); ?>
<?php echo $html->script('jquery.maskedinput.js'); ?>
<script>
$(document).ready(function(){
	$("#divNaturalizacao").hide();
});
</script>

<!--<div class="pfs form">-->
<?php echo $this->Form->create('Pf', array('type'=>'file'));?>

      <div id="breadcrumb">
        <ul>
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Inscrições</a></li>
          <li>Pessoa Física</li>
        </ul>
      </div>
      <!-- / #breadcrumb -->
      
      <ul id="tabs">
        <li class="abaAtiva"><a id="1" href="#">Identificação</a></li>
        <li class="abaInativa"><a href="#" id="2" title="Aba 2">Área de atuação</a></li>
        <li class="abaInativa"><a href="#" id="3" title="Aba 3">Dados Profissionais</a></li>
        <li class="abaInativa"><a href="#" id="4" title="Aba 4">Contato/localização</a></li>                
      </ul>
      
      <!-- Identificação -->
      <div id="tabs-container1" class="abaConteudo">
      <div class="formulario">
            <div class="formularioDestaque">
      <?php
      	$sexo = array('M' => 'Masculino', 'F' => 'Feminino');
		$naturalizado = array('S' => 'Sim', 'N' => 'Não');		
      ?>
      	<form id="form1" action="#">
          <table class="formulario" style="width:97%" >
            <tr>
              <td width="130px"><label for="cidade">Nacionalidade</label><br>                
                <?php echo $this->Form->input('nacionalidade_id', array('label' => false)); ?>
              </td>
              <td width="130px"><label for="cidade">Naturalidade</label><br>                
                <?php echo $this->Form->input('naturalidade_id', array('label' => false)); ?>
              </td>
              <td width="130px"><label for="cidade">Naturalizado</label><br>                
                <?php echo $this->Form->input('naturalizado', array('type' => 'select', 'options' => $naturalizado, 'empty' => true, 'label' => false)); ?>
                <br>
              </td>                            
            </tr>
            
            <tr>
            <td colspan="3">
            <div id="divNaturalizacao">
              <fieldset class="fieldset">
              <legend class="legend">Informações Naturalizado</legend>
              <table width="97%"  style="margin:0 auto;">
              	<tr>
              		<td><label for="cidade">Data Naturalizado</label><br>
              			<?php echo $this->Form->input('data_naturalizacao', array('dateFormat' => 'DMY', 'label' => false)); ?>
              		</td>              		
              		<td><label for="cidade">Visto</label><br>
              			<?php echo $this->Form->input('visto_id', array('label' => false)); ?>
              		</td>
              		<td><label for="cidade">Data Validade Visto	</label><br>
              			<?php echo $this->Form->input('data_validade_visto', array('dateFormat' => 'DMY', 'label' => false)); ?>              		
              		</td>
              	</tr>                                                 
              </table>              
          	</div>          	
          	</td>
          	</tr>            
            
           <!-- 
           <tr>
           	<td colspan="4"><br></td>
           </tr>
           -->
           
           <tr>
              <td colspan="2"><label for="cidade">Nome</label><br>                
                <?php echo $this->Form->input('nome', array('label' => false, 'size' => 70)); ?>
              </td>
              <td colspan="2" align="right"><label for="cidade">Nome Artístico</label><br>                
                <?php echo $this->Form->input('nome_artistico', array('label' => false, 'size' => 40)); ?>
              </td>                           
           </tr>
           
           <tr>
           	<td colspan="4"><br></td>
           </tr>
           </table>
           
           <table class="formulario" style="width:97%">           
           <tr>
           		<td width="210px"><label for="cidade">Data Nascimento</label><br>                
                <?php echo $this->Form->input('data_nascimento', array('dateFormat' => 'DMY', 'label' => false)); ?>
              </td>
              <td width="130px"><label for="cidade">Sexo</label><br>                
                <?php echo $this->Form->input('sexo', array('type' => 'select', 'options' => $sexo, 'empty' => true, 'label' => false)); ?>
              </td>
              <td width="130px"><label for="cidade">Passaporte</label><br>                
                <?php echo $this->Form->input('passaporte', array('label' => false)); ?>
              </td>
              <td width="130px"><label for="cidade">CPF</label><br>                
                <?php echo $this->Form->input('cpf', array('label' => false)); ?>
                <br>
              </td>                                          
           </tr>           
           
           
           
           <tr>           	
              <td width="100px"><label for="cidade">RG</label><br>                
                <?php echo $this->Form->input('rg', array('label' => false)); ?>
              </td>
              <td width="80px"><label for="cidade">Expedidor RG</label><br>                
        		<?php echo $this->Form->input('expedidor_rg_id', array('label' => false)); ?>
              </td>
              <td width="210px"><label for="cidade">Data RG</label><br>                
                <?php echo $this->Form->input('data_rg', array('dateFormat' => 'DMY', 'label' => false)); ?>
              </td>                                        
           </tr>           
                                  
          </table>
     
            
            <div class="alinhaBotao">
              <input type="submit" value="Prosseguir" class="botaoForm botaoForm1"/>
            </div>      
          </form>
          </div>
          </div>
      </div>
      <!-- Identificação -->
      
      

	  <!-- Área de Atuação -->	  	  
      <div id="tabs-container2" class="abaConteudo">
      <div class="formulario">
            <div class="formularioDestaque">
		<?php
	  	$opcoesAtividade = array('0'=>'Selecione um Segmento');
		$opcoesElo = array('0'=>'Selecione uma Atividade');
		//echo $this->Form->input('segmento_id', array('empty' => true));
		$atividade = $this->Form->input('atividade', array('type' => 'select', 
													'label' => 'Atividade', 
													'options' => $opcoesAtividade
													));
		$elo = $this->Form->input('elo', array('type' => 'select', 
													'label' => 'Elo', 
													'options' => $opcoesElo
													));																								
		//echo $this->Html->div('', $atividade, array('id' => 'divComboCBO'));	  
	  ?>
		<table class="formulario" style="width:97%" >
            <tr>
              <td><label for="cidade">Segmento Cultural</label><br>                
                <?php echo $this->Form->input('segmento_id', array('empty' => true, 'label' => false)); ?>
              </td>
            </tr>
            </table>            
            
            <fieldset class="fieldset">
              <legend class="legend">Áre de Atuação</legend>
            	<div id="divComboCBO">
            </fieldset>
            <div class="alinhaBotao">
          		<input type="submit" value="Prosseguir" class="botaoForm botaoForm2"/>          
        	</div>                                            
           </div>
           </div>
      </div>
      <!-- Área de Atuação -->
      
      <!-- Dados Profissionais -->
      <div id="tabs-container3" class="abaConteudo">
	
          <div class="formulario">
            <div class="formularioDestaque">
              <table width="98%" style="margin:0 auto;">
                <tr>
                  <td class="celula1"><label for="lblRsocial">Ano Graduação</label><br>
                        <?php echo $this->Form->input('ano_graduacao', array('label' => false, 'size' => 10)); ?>
                    </td>
                    <td><label for="lblRsocial">Curso</label>
                   	 <?php echo $this->Form->input('curso', array('maxlength' => '100', 'label' => false, 'size' => 72));?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="celula1" width="60px"><label for="lblRsocia">Profissão</label>
                    <br/>
                    <?php echo $this->Form->input('profissao', array('label' => false, 'size' => 90)); ?>
                    </td>
                </tr>
                <tr>
                  <td colspan="2" class="celula1" width="60px"><label for="lblRsocia">Anexar Currículo</label>
                    <br/>
                    <?php echo $this->Form->input('curriculo_anexo', array('type'=>'file', 'label' => false)); ?>
                    </td>
                </tr>                
                </table>
                <div class="alinhaBotao">
                	<input type="submit" value="Prosseguir" class="botaoForm botaoForm4"/>
            	</div>
          </div>
      </div>
	</div>
      <!-- Dados Profissionais -->
      
      
      <!-- Contato/localização -->
      <div id="tabs-container4" class="abaConteudo">      
          <div class="formulario">
            <div class="formularioDestaque">
              <table width="98%" style="margin:0 auto;">
                <tr>
                  <td colspan="3" class="celula1">
                      <?php echo $form->label('logradouro','Logradouro');?>
                    <br/>
                    <?php echo $form->input('logradouro',array('label'=> '','size'=>'65'));?>
                  </td>
                  <td class="celula1" width="60px"><label for="lblRsocial">Número</label>
                    <br/>
                    <?php echo $form->input('numero',array('label'=> '','size'=>'10'));?>
                    </td>
                  <td colspan="2"><label for="lblRsocial">Complemento</label>
                    <br/>
                    <?php echo $form->input('complemento',array('label'=> '','size'=>'30'));?>
                  </td>
                </tr>
                <tr>
                  <td width="140px"><label for="lblCnpj">Bairro</label>
                    <br/>
                    <?php echo $form->input('bairro',array('label'=> '','size'=>'20'));?>
                  </td>
                  <td width="100px" class="celula2"><label for="lblDtFundacao">Cidade</label>
                    <br/>
                    <?php echo $this->Form->input('cidade_id', array('empty' => true, 'label' => false)); ?>
					</td>
                  <td width="100px"><label for="lblDtFormalizacao">CEP</label>
                    <br/>
                    <?php echo $form->input('cep',array('label'=> '','size'=>'12'));?>
                  </td>
                  <td width="100px" class="celula2"><label for="lblDtFundacao">Estado</label>
                    <br/>
                    <?php echo $this->Form->input('estado_id', array('empty' => true, 'label' => false)); ?>
                    </td>
                  <td><label for="lblCelular">País</label>
                    <br/>
                    <?php echo $this->Form->input('pais_id', array('empty' => true, 'label' => false)); ?>
                    </td>
                </tr>
                <tr>
                  <td colspan="3" class="celula1"><label for="lblNome">Referências</label>
                    <br/>
                    <?php echo $form->input('referencias',array('label'=> '','size'=>'65'));?>
                  </td>
                  <td class="celula1" width="120px"><label for="lblRsocial">Telefone</label>
                    <br/>
                    <input name="Rsocial" type="text" id="txtRsocial" size="15"  /></td>
                  <td class="celula1" width="120px"><label for="lblRsocial">Fax</label>
                    <br/>
                    <?php echo $form->input('fax',array('label'=> '','size'=>'15'));?>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="celula1"><label for="lblNome">E-mail</label>
                    <br/>
                    <input name="Img" type="text" id="txtImg" size="65"  /></td>
                  <td class="celula1" colspan="3"><label for="lblRsocial">Site Institucional</label>
                    <br/>
                    <?php echo $form->input('site',array('label'=> '','size'=>'50'));?>
                    </td>
                </tr>
              </table>
            </div>
            <div class="alinhaBotao">
                <?php echo $form->end('Salvar Pessoa Física',array('class'=>'botaoForm'));?>

            </div>
          </div>
      </div>    <!--</div>-->
      <!-- Contato/localização -->
      
      
      
      <!-- Área de Atuação -->
            </div>    <!--</div>-->
      <!-- Área de Atuação -->



















	<fieldset> 		
	<?php				
		//echo "<a href='#' id='teste' class='btnRemoveTelefone'>hjhj</a>";
		
		//echo $this->Form->input('tipologia_id');
		
		//echo $this->Html->div('', $elo, array('id' => 'divComboElo'));		
				
		
		
		
		
		
		/*
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
		echo $this->Form->input('contadorEloAtividade', array('type' => 'hidden'));
		//echo $this->Form->input('cbo', array('type' => 'hidden', 'id' => 'PfAtividade'));
		//echo $this->Form->input('elo', array('type' => 'hidden', 'id' => 'PfElo'));
		*/		
	?>
	</fieldset>
<?php //echo $this->Form->end(__('Enviar', true));?>
</div>
<!--<div class="actions">
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
</div>-->