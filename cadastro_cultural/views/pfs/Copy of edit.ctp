<?php echo $html->script('jquery-1.7.1.min.js'); ?>
<?php echo $html->script('scriptAddPf.js'); ?>
<?php echo $html->script('jquery.maskedinput-1.3.js'); ?>
<?php echo $html->script('jquery-ui-1.7.3.custom.min.js'); ?>
<?php echo $html->script('jquery.ui.datepicker-pt-BR.js'); ?>
<?php echo $this->Html->css('jquery-ui/jquery-ui-1.7.3.custom.css'); ?>

<script>
$(document).ready(function(){
	$(".data").datepicker($.datepicker.regional['pt-BR']);
	$(".data").datepicker({});
	//$("#divNaturalizacao").hide();	
});
</script>

<style>
#ui-datepicker-div{
	font-size:11px;
}
.obrigatorio{
	color:red;
}
#listaErros{
	visibility: hidden;
	display: none;
	font-family: Arial,Helvetica,sans-serif;
	font-size:12px;	
}
</style>

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
        <li class="abaAtiva"><a id="1" href="#" title="Identificação">Identificação</a></li>
        <!--<li class="abaInativa"><a href="#" id="2" title="Área de Atuaçao">Área de atuação</a></li>-->
        <li class="abaInativa"><a href="#" id="3" title="Dados Profissionais">Dados Profissionais</a></li>
        <li class="abaInativa"><a href="#" id="4" title="Contato Localização">Contato/localização</a></li>                
        <li class="abaInativa"><a href="#" id="5" title="Contato Localização">Anexos</a></li>
      </ul>
      
      <!-- Identificação -->
      <div id="tabs-container1" class="abaConteudo">
      <div class="formulario">
      <div class="formularioDestaque">
      <?php
      	$sexo = array('M' => 'Masculino', 'F' => 'Feminino');
		$naturalizado = array('S' => 'Sim', 'N' => 'Não');		
      ?>
	      	<table style="width:98%" class="formulario">
	      	<!--<form id="form1" action="#">-->
	            <tbody><tr>
	              <td colspan="3"><label for="lblRsocial">1.Nome Completo<span class="obrigatorio">*</span></label>
	                <br>
	                <?php echo $this->Form->input('nome', array('label' => false, 'size' => 70)); ?>
	              <td colspan="3" class="celula2"><label for="lblNmFantasia">2.Nome Artístico<span class="obrigatorio">*</span></label>
	                <br>
	                <?php echo $this->Form->input('nome_artistico', array('label' => false, 'size' => 50)); ?>
	            </tr>
	            <tr>
	              <td><label for="lblCnpj">3.Nacionalidade<span class="obrigatorio">*</span></label>
	                <br>
	              <?php echo $this->Form->input('nacionalidade_id', array('label' => false, 'empty' => true)); ?>  
				  </td>
	              <td class="paisVisible"><label for="lblCnpj">4.Naturalidade</label>
	                <br>
	               <?php echo $this->Form->input('naturalidade', array('label' => false)); ?> 
				   </td>	              
				  <td class="paisHidden"><label for="lblCnpj">4.País Origem</label>
	                <br>
	              <?php echo $this->Form->input('pais_origem', array('empty' => true, 'label' => false)); ?>  
				  </td>
				  <!--<td class="paisHidden"><label for="lblCnpj">5.Cidade</label>
	                <br>
	              <?php echo $this->Form->input('cidade', array('empty' => true, 'label' => false)); ?>  
				  </td>-->	
				  <td class="paisHidden"><label for="lblCnpj">5.Passaporte</label>
	                <br>
	              <?php echo $this->Form->input('passaporte', array('empty' => true, 'label' => false)); ?>  
				  </td>			  
	              <td class="celula2"><label for="lblNatJuridica">6.Data de Nascimento</label>
	                <br>
	                <?php 
	                	$nascimento = $this->Formatacao->data($this->Form->data['Pf']['data_nascimento']);
	                	echo $form->input('data_nascimento',array('class'=>'data', 'value' => $nascimento, 'label'=> false, 'size'=>'20', 'type' => 'text'));
	                ?></td>
	              <td><label for="lblCnpj">7.Sexo<span class="obrigatorio">*</span></label>
	                <br>
	                <?php echo $this->Form->input('sexo', array('type' => 'select', 'options' => $sexo, 'empty' => true, 'label' => false)); ?>  
				  </td>
	            </tr>
	            <tr>
	              <td class="celula2"><label for="lblNatJuridica">8.CPF<span class="obrigatorio">*</span></label>
	                <br>
	                <?php echo $this->Form->input('cpf', array('label' => false)); ?>
					</td>
	              <td class="celula2"><label for="lblNatJuridica">9.RG<span class="obrigatorio">*</span></label>
	                <br>
	            <?php echo $this->Form->input('rg', array('label' => false)); ?>    
				</td>
	              <td class="celula2"><label for="lblNatJuridica">10.Data Expedição</label>
	                <br>
	                <?php echo $this->Form->input('rg_dataexpedicao', array('label' => false, 'type' => 'text', 'class' => 'data')); ?>
	                </td>
	              <td class="celula2"><label for="lblNatJuridica">11.Órgão Expedidor</label>
	                <br>
	                <?php echo $this->Form->input('rg_expedidor', array('label' => false)); ?>
					</td>
	                 <td class="celula2"><label for="lblNatJuridica">12.Naturalizado Brasileiro</label>
	                <br>
	                <?php echo $this->Form->input('naturalizado', array('type' => 'select', 'options' => $naturalizado, 'label' => false)); ?>
				</td>
	            </tr>
	            
	            <tr>
            <td colspan="4">
            <div id="divNaturalizacao">
              <fieldset class="fieldset">
              <legend class="legend">Informações Naturalizado</legend>
              <table width="97%"  style="margin:0 auto;">              
	              <tr>	             
		              <td class="celula2"><label for="lblNatJuridica">13.Data Naturalização</label>
		                <br>
		                <?php echo $this->Form->input('data_naturalizacao', array('class' => 'data', 'label' => false, 'type' => 'text')); ?></td>
		              <td class="celula2"><label for="lblNatJuridica">14.Tipo Visto</label>
		                <br>
		                <?php echo $this->Form->input('visto', array('label' => false)); ?>    
					</td>
		              <td class="celula2"><label for="lblNatJuridica">11.Data Limite Validade</label>
		                <br>
		            	<?php echo $this->Form->input('data_validade_visto', array('type' => 'text', 'label' => false, 'class' => 'data')); ?>    
					</td>
	            </tr>              
              </table>
              </fieldset>              
          	</div>          	          	
          	</td>
          	</tr>
  	          </tbody></table>
  			<div class="alinhaBotao">
               	<br><input type="submit" id="botaoAba1" class="botaoForm" value="Prosseguir">
           	</div>    	
          </div>
          </div>
      </div>
      <!-- Identificação -->
      
      
      
      
      
      
      <!-- Dados Profissionais -->
      <div id="tabs-container3" class="abaConteudo">				
          <div class="formulario">
            <div class="formularioDestaque">
              <table width="98%" style="margin:0 auto;" id="tableDadosProfissionais">
              <!--<form id="form3" action="#">-->
                 <tr>
                  <td colspan="2" class="celula1" width="60px"><label for="lblRsocia">Profissão<span class="obrigatorio">*</span></label>
                    <br/>
                    <?php echo $this->Form->input('profissao', array('label' => false, 'size' => 90)); ?>
                    </td>
                </tr>
                                                               
                </table>
                <table id="tableAddGraduacao" width="98%" style="margin-left:8px;">
                <?php                 	
                	$contadorGraduacao = 0;
                	/*
                		echo '<tr id="graduacao'.$contadorGraduacao.'"><td width="80px" class="celula1">
                		<label for="lblRsocial">Ano Graduação</label><br>
                		<div class="input text"><input type="text" value="'.$value['ano_graduacao'].'" name="data[Pf][ano_graducao][]" maxlength="4" size="5" class="ano" id="PfAnoGraducao'.$contadorGraduacao.'"></div>
                		</td>
                		<td align="left"><label for="lblRsocial">Curso</label>
                		<div class="input text"><input type="text" value="'.$value['curso'].'" name="data[Pf][curso][]" maxlength="100" size="72" id="PfCurso'.$contadorGraduacao.'">
                		<input type="checkbox" value="'.$contadorGraduacao.'" name="removerGraduacao"></div></td></tr>';                               	
                	*/
                	
                	                	                  	
                	foreach($this->Form->data['Graduacao'] as $value){
                		$contadorGraduacao++;                	
                		echo '<tr id="graduacao'.$contadorGraduacao.'"><td width="80px" class="celula1">
                		<label for="lblRsocial">Ano Graduação</label><br>'.
                		$this->Form->input('ano_graduacao', array('type' => 'select', 'options' => $anos_graduacao, 'empty' => true, 'label' => false, 'name' => 'data[Pf][ano_graduacao][]', 'selected' => $value['ano_graduacao'])).' 
                		</td>
                		<td align="left"><label for="lblRsocial">Curso</label>
                		<div class="input text"><input type="text" value="'.$value['curso'].'" name="data[Pf][curso][]" maxlength="100" size="72" id="PfCurso'.$contadorGraduacao.'">
                		<input type="checkbox" value="'.$contadorGraduacao.'" name="removerGraduacao"></div></td></tr>';                               	
                	}
                ?>                
                </table>
                <div style="margin-left:10px;" class="Add">
                <?php echo $this->Form->input('contadorDP', array('type' => 'hidden')); ?>
                	<a href="#" class="icoForm" id="addGraducao" style="font-size:11px; color:blue; text-decoration:none">
                		<img width="14" height="14" title="Novo Registro" alt="Novo" src="/cadastro_cultural/img/../icones/round_add_verde_16x16.png">Adicionar Nova graduação
                	</a>
                	<?php                			
				$delete_img = $this->Html->image('../icones/round_remove_16x16.png', array('alt'=> 'Excluir Graduações', 'title' => 'Excluir Graduações', 'border' => '0', 'height' => '15', 'id' => 'removeGraduacao', 'style' => 'font-size:11px; color:blue; text-decoration:none'));							
				echo $this->Html->link($delete_img . ' Remover Graduações Selecionadas', '#', array('escape' => false, 'style'=>'font-size:11px; color:blue; text-decoration:none', 'id' => 'removeGraduacao'));		
					?>                  	
                </div>
                <div class="alinhaBotao">
                	<input type="submit" value="Prosseguir" class="botaoAba3 botaoForm"/>
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
                      <?php echo $form->label('logradouro','Logradouro');?><span class="obrigatorio">*</span>
                    <br/>
                    <?php echo $form->input('logradouro',array('label'=> '','size'=>'65'));?>
                  </td>
                  <td class="celula1" width="60px"><label for="lblRsocial">Número<span class="obrigatorio">*</span></label>
                    <br/>
                    <?php echo $form->input('numero',array('label'=> '','size'=>'10'));?>
                    </td>
                  <td colspan="2"><label for="lblRsocial">Complemento</label>
                    <br/>
                    <?php echo $form->input('complemento',array('label'=> '','size'=>'30'));?>
                  </td>
                </tr>
                <tr>
                  <td width="140px"><label for="lblCnpj">Bairro<span class="obrigatorio">*</span></label>
                    <br/>
                    <?php echo $form->input('bairro',array('label'=> '','size'=>'20'));?>
                  </td>
                  <td width="140px"><label for="lblCnpj">5.Estado</label>
	                <br>
	              <?php echo $this->Form->input('estado_id', array('empty' => true, 'label' => false)); ?>  
				  </td>
                  <td id="tdCidade" width="100px" class="celula2"><label for="lblDtFundacao">Cidade<span class="obrigatorio">*</span></label>
                    <br/>
                    <?php echo $this->Form->input('cidade', array('empty' => true, 'label' => false)); ?>
					</td>
                  <td width="100px"><label for="lblDtFormalizacao">CEP<span class="obrigatorio">*</span></label>
                    <br/>
                    <?php echo $form->input('cep',array('label'=> '','size'=>'12'));?>
                  </td>
                  <td colspan="2" width="100px" class="celula2"><label for="lblDtFundacao">Estado</label>
                    <br/>
                    <?php echo $this->Form->input('estado_id', array('empty' => true, 'label' => false)); ?>
                    </td>
                  <!--<td><label for="lblCelular">País</label>
                    <br/>
                    <?php echo $this->Form->input('pais_id', array('empty' => true, 'label' => false)); ?>
                    </td>-->
                </tr>
                <tr>
                  <td colspan="3" class="celula1"><label for="lblNome">Referências</label>
                    <br/>
                    <?php echo $form->input('referencias',array('label'=> '','size'=>'65'));?>
                  </td>
                  <td colspan="2" class="celula1" width="120px"><label for="lblRsocial">Fax</label>
                    <br/>
                    <?php echo $form->input('fax',array('label'=> '','size'=>'15'));?>
                    </td>                  
                </tr>
                <tr>   
                  <td class="celula1" colspan="3">
                    <br/>                    
                    <div id="sites">
                    <?php                    
                    	$contadorSite = 0;                    
                    	foreach($this->Form->data['ContatoPf'] as $value){
                    		if(!empty($value['site'])){				
	                    		$contadorSite++;
	                    		echo '<tr id="site'.$contadorSite.'">
	                    		<td class="celula1" colspan="3"><label for="lblRsocial">Site</label><br>
	                    		<div class="input text required"><label for="PfSite"></label>
	                    		<input type="text" value="'.$value['site'].'" name="data[Pf][site][]" size="60" maxlength="255">
	                    		<input type="checkbox" value="'.$contadorSite.'" name="removerSite">
	                    		</div>
	                    		</td></tr>';
	                    	}
                    	}
                     ?>                   
                    </div>
                    </td>
                 </tr>
                 <tr>
                 	<td colspan="3">
                    <a href="#" class="icoForm" id="addSite" style="font-size:11px; color:blue; text-decoration:none">
                		<img width="14" height="14" title="Novo Registro" alt="Novo" src="/cadastro_cultural/img/../icones/round_add_verde_16x16.png" style="float:left">Adicionar Site
                	</a>
                	<?php                			
					$delete_img = $this->Html->image('../icones/round_remove_16x16.png', array('alt'=> 'Excluir Site', 'title' => 'Excluir Graduações', 'border' => '0', 'height' => '15', 'id' => 'removeSite', 'style' => 'font-size:11px; color:blue; text-decoration:none'));							
					echo $this->Html->link($delete_img . ' Remover Sites Selecionados', '#', array('escape' => false, 'style'=>'font-size:11px; color:blue; text-decoration:none', 'id' => 'removeSite'));		
					?>
                    </td>
                </tr>
                <tr>                                          
                    <?php //echo $form->input('telefone',array('label'=> '','size'=>'15', 'name' => 'data[Pf][telefone][]'));?>
                    <td><div id="telefones">                    	
                    	<?php
                    	$contadorTelefone = 0;                    
                    	foreach($this->Form->data['ContatoPf'] as $value){				
                    		$contadorTelefone++;			
							echo '<tr id="telefone'.$contadorTelefone.'"><td class="celula1" colspan="3">
								<label for="lblRsocial">Telefone</label><br>
								<div class="input text"><label for="PfTelefone"></label>
									<input type="text" value="'.$value['telefone'].'" maxlength="13" onkeydown="formatTelefone(this, event)" name="data[Pf][telefone][]" size="15" id="PfTelefone">
									<input type="checkbox" value="'.$contadorTelefone.'" name="removerTelefone">
								</div></td>
							</tr>';							                    		
                    	}                     	                   
                    ?>                    
                    </div></td>
                 </tr>
                 <tr><td colspan="3">
                    <a href="#" class="icoForm" id="addTelefone" style="font-size:11px; color:blue; text-decoration:none">
                		<img width="14" height="14" title="Novo Registro" alt="Novo" src="/cadastro_cultural/img/../icones/round_add_verde_16x16.png" style="float:left">Adicionar Telefone
                	</a>
                	<?php                			
					$delete_img = $this->Html->image('../icones/round_remove_16x16.png', array('alt'=> 'Excluir Telefone', 'title' => 'Excluir Graduações', 'border' => '0', 'height' => '15', 'id' => 'removeTelefone', 'style' => 'font-size:11px; color:blue; text-decoration:none'));							
					echo $this->Html->link($delete_img . ' Remover Telefones Selecionados', '#', array('escape' => false, 'style'=>'font-size:11px; color:blue; text-decoration:none', 'id' => 'removeTelefone'));		
					?>                	
                    </td>
                </tr></table>
                <table>                
                <tr>
                <td>
                  <div id="emails">                                                          	
                    	<?php
                    	$contadorEmail = 0;                    	                    
                    	foreach($this->Form->data['ContatoPf'] as $value){
                    	$contadorEmail++;							
							echo'<tr id="email'.$contadorEmail.'">
								<td class="celula1" colspan="3">
									<label for="lblRsocial">Email</label><br>
									<div class="input text required"><label for="PfEmail"></label>
										<input type="text" value="'.$value['email'].'" name="data[Pf][email][]" size="60" maxlength="255" id="PfEmail">
										<input type="checkbox" value="'.$contadorEmail.'" name="removerEmail">
									</div>
								</td>
								</tr>';							                    		
                    	}                     	                    	                   
                    	?>                      
                    </div>
                    </td>
                    </tr>
                    <tr><td colspan="3">
                    <a href="#" class="icoForm" id="addEmail" style="font-size:11px; color:blue; text-decoration:none">
                		<img width="14" height="14" title="Novo Registro" alt="Novo" src="/cadastro_cultural/img/../icones/round_add_verde_16x16.png" style="float:left">Adicionar Email
                	</a>
                	<?php                			
					$delete_img = $this->Html->image('../icones/round_remove_16x16.png', array('alt'=> 'Excluir Email', 'title' => 'Excluir Graduações', 'border' => '0', 'height' => '15', 'id' => 'removeEmail', 'style' => 'font-size:11px; color:blue; text-decoration:none'));							
					echo $this->Html->link($delete_img . ' Remover Email Selecionados', '#', array('escape' => false, 'style'=>'font-size:11px; color:blue; text-decoration:none', 'id' => 'removeEmail'));		
					?>
					</td></tr>                    
                    </td>
                 </tr>                                  
              </table>              
            </div>
            <div class="alinhaBotao">
                <input type="submit" value="Prosseguir" class="botaoAba4 botaoForm"/>
            </div>
          </div>
      </div>    
      <!-- Contato/localização -->
      


      <!-- Anexos -->
      <div id="tabs-container5" class="abaConteudo">
				
          <div class="formulario">
            <div class="formularioDestaque">
              <table width="98%" style="margin:0 auto;" id="tableDadosProfissionais">              
                 <tr>
                  <td colspan="2" class="celula1" width="60px"><label for="lblRsocia">RG/CPF</label>
                    <br/>
                    <?php
	                    $imgCurriculo = $this->Html->image('../icones/file_16x16.png', array('alt'=> 'Visualizar Arquivo anexo', 'title' => 'Visualizar Arquivo anexo', 'border' => '0'));							
						echo $this->Html->link($imgCurriculo, array('../../'.$this->Form->data['Pf']['documento_anexo']), array('escape' => false, 'target' => 'blank'));
                    ?>
                    <?php echo $this->Form->input('documento_anexo', array('type'=>'file', 'label' => false)); ?>
                    </td>
                </tr>
                <tr>
                  <td colspan="2" class="celula1" width="60px"><label for="lblRsocia">Currículo</label>
                    <br/>                    
                    <?php
	                    $imgCurriculo = $this->Html->image('../icones/file_16x16.png', array('alt'=> 'Visualizar Arquivo anexo', 'title' => 'Visualizar Arquivo anexo', 'border' => '0'));							
						echo $this->Html->link($imgCurriculo, array('../../'.$this->Form->data['Pf']['curriculo_anexo']), array('escape' => false, 'target' => 'blank'));
                    ?>
                    <?php //echo $this->Form->data['Pf']['curriculo_anexo']; ?>
                    <?php echo $this->Form->input('curriculo_anexo', array('type'=>'file', 'label' => false)); ?>
                    <input type="hidden" id="valCidade" value="" name="data[Pf][cidade_id]">
                    </td>
                </tr>
               </table>
                <div class="alinhaBotao">
                	<?php echo $form->end('Salvar Atualização Pessoa Física',array('class'=>'botaoForm'));?>
            	</div>
          </div>
      </div>
	</div>
      <!-- Anexos -->
