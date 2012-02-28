<?php
// Incluir o jQuery ao projeto
// Neste exemplo estou importando a jquery.tablesorter tamb�m
// O segundo par�metro (false) � para indicar que vai no <head> e n�o no local onde est� sendo executado
$javascript->link(array('jquery','jquery.maskedinput','jquery.validate'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('

	
	function formatTelefone(element, e){
	  if (e.keyCode != 8){
	    length = element.value.length;
	    if (length == 2){
	      if (element.value.charAt(0)!="(")
	        element.value = "(" + element.value + ")";
	    }
	    if (length == 3)
	      if (element.value.charAt(0)=="(")
	        element.value += ")";
	    if (length == 8)
	      element.value += "-";
	  }
	}
	

  $(document).ready(function(){	
	
	$("#loading").hide();
	$("#btnRemoveTelefone").hide();
	$("#btnSalvarCurriculo").hide();
	$("#btnExcluirCurriculo").hide();	
	$("#PfCpf").mask("999.999.999-99");
	$("#PfRg").mask("99999999-99");
	$("#PfCep").mask("99999-999");
	var contadorCurriculos = 0;
	
	
	
	
	
	$("#PfAddForm").validate({		            	            			            		
			rules: {
				"data[Pf][nacionalidade_id]": { required: true },
				"data[Pf][naturalidade_id]": { required: true },
				"data[Pf][expedidor_rg_id]": { required: true },
				"data[Pf][cidade_id]": { required: true },				
				"data[Pf][escolaridade_id]": { required: true },
				"data[Pf][pais_id]": { required: true },
				"data[Pf][nome]": { required: true, minlenght: 2 },									        		
				"data[Pf][nome_artistico]": { required: true, minlenght: 2 },
				"data[Pf][sexo]": { required: true },
				"data[Pf][cpf]": { required: true, cpf: true },
				"data[Pf][rg]": { required: true, minlenght: 2 },
				"data[Pf][profissao]": { required: true, minlenght: 2 },
				"data[Pf][logradouro]": { required: true, minlenght: 2 },
				"data[Pf][numero]": { required: true, minlenght: 2 },
				"data[Pf][complemento]": { required: true, minlenght: 2 },
				"data[Pf][bairro]": { required: true, minlenght: 2 },
				"data[Pf][cep]": { required: true, minlenght: 2 },
				"data[Pf][comprovante]": { required: true, minlenght: 2 },
				"data[Pf][email]" :	{ required: true, email: true },			
			}	        				        		
	});  					
	
	
	$("#PfEmail").blur(function(){
		$("#PfAtividade").val($("#divComboCBO #PfAtividadeId").val());
		$("#PfElo").val($("#divComboElo #PfEloId").val());
		
		$("#listaCurriculos table").find("tr .or").each(function(){																		
			inputOr = "<input type=\"text\" name=\"or[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputOr);																				
		});
		$("#listaCurriculos table").find("tr .dt").each(function(){																		
			inputDt = "<input type=\"text\" name=\"dt[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputDt);													
		});
		$("#listaCurriculos table").find("tr .funcaoId").each(function(){																		
			inputFuncao = "<input type=\"text\" name=\"funcao[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputFuncao);													
		});
		$("#listaCurriculos table").find("tr .produtoId").each(function(){																		
			inputProdutos = "<input type=\"text\" name=\"produtos[]\" value=\"" + $(this).val() + "\">";
			$("#listaCurriculos").append(inputProdutos);													
		});
		$("#listaCurriculos table").find("tr .descricao").each(function(){																		
			inputDescricao = "<input type=\"text\" name=\"descricao[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputDescricao);													
		});		
	});
	
	// antes de submeter formulario verifica se o telefone foi informado
	$("#PfAddForm").submit(function(){
		okTel = 0;
		
		$("#PfAtividade").val($("#divComboCBO #PfAtividadeId").val());
		$("#PfElo").val($("#divComboElo #PfEloId").val());
		
		
		$(".telefones").find("input:text").each(function(){
			okTel = 1;			
		});
		if(okTel != 1){
			alert("informe o telefone");
			return false;
		}		
							
	});		
	
	
	
	
	//carrega combobox atividade
	$("#PfSegmentoId").change(function(){		
		var segmento = $(this).val();					
		$.get("/cadastro_cultural/pfs/combo_cbo/"+segmento+"", {		    
		    }, function(resposta){
		        //Tratamento dos dados de retorno
    			$("#divComboCBO").html(resposta); 	   
		   }
		);	        									
	});		
	
	
	
	//adiciona campos de telefones adicionais
	var qtdTel = 0;
	$("#btnAddTelefone").click(function(){
		qtdTel++;		
		var inputTelefone = "";
		if(qtdTel == 1)
			$("#btnRemoveTelefone").show();
							
		inputTelefone += "<span style=\"margin:8px; display:block;\"><input type=\"checkbox\" name=\"removerTelefone\" value=\"\"><input type=\"text\" id=\"\" maxlength=\"13\" name=\"data[Pf][telefone][]\" class=\"inputTelefone\"  onkeydown=\"formatTelefone(this, event)\" style=\"width:110px;\" /></span>";
		$(".telefones").append(inputTelefone);	
		$(".telefones input:text:last").attr("id","tel"+qtdTel);
		$(".telefones input:checkbox:last").attr("value",qtdTel);
		
	});
	
	// eventos ao clicar em salvar currículo
	$("#btnSalvarCurriculo").click(function(){
		contadorCurriculos++;
		
		descricao = $(".curriculos #CurriculoDescricao").val();
		organizacao = $(".curriculos #CurriculoOrganizacaoResponsavel").val();
		data = $(".curriculos #CurriculoDataDay").val() + "/" + $(".curriculos #CurriculoDataMonth").val() + "/" + $(".curriculos #CurriculoDataYear").val();
		dataFormatada = $(".curriculos #CurriculoDataYear").val() + "-" + $(".curriculos #CurriculoDataDay").val() + "/" + $(".curriculos #CurriculoDataMonth").val();		
		produtoId = $(".curriculos #ProdutoProduto").val();
		$("#PfContadorCurriculo").val(contadorCurriculos);
		
		produtos = "";		
		contador = 0;
		//pega os produtos selecionados
		$(".curriculos #ProdutoProduto").find("option").each(function(){															
			if(this.selected){				
				if(contador == 0)			
					produtos += this.text;
				else		
					produtos += " ," + this.text;												
				
				contador++; 									
			}																		
		});
		
		//pega função exercida		
		funcao = "";
		funcaoId = "";
		$(".curriculos #CurriculoFuncaoExercidaId").find("option").each(function(){														
			if(this.selected){											
				funcao += this.text;
				funcaoId += this.value;				
			}																		
		});						
		
		
		
				
		
		var tabelaListaCurriculos = "";		
		tabelaListaCurriculos += "<span class=\"txtExcluir\"><br><input type=\"checkbox\" value=\"" + contadorCurriculos + "\" />&nbsp;</span><br>";
		tabelaListaCurriculos += "<table id=\"tabelaCurriculo" + contadorCurriculos + "\">";
		tabelaListaCurriculos += "<tr><th>Organizaçõa Responsável</th><th>Data</th><th>Função Exercida</th><th>Produtos</th></tr>";
		tabelaListaCurriculos += "<tr><td class=\"or\">" + organizacao + "</td><td class=\"dt\">" + data + "</td><td class=\"funcao\">" + funcao + "</td><td class=\"produtos\">" + produtos + "</td></tr>";
		tabelaListaCurriculos += "<tr><th colspan=\"4\" align=\"center\" class=\"descricao\">Descrição</th></tr><tr><td colspan=\"4\">" + descricao + "</td></tr>";
		tabelaListaCurriculos += "<input type=\"hidden\" name=\"funcaoId[]\" class=\"funcaoId\" value=\"" + funcaoId + "\">";
		tabelaListaCurriculos += "<input type=\"hidden\" name=\"ProdutoId[]\" class=\"produtoId\" value=\"" + produtoId + "\">";				
		//tabelaListaCurriculos += "<input type=\"hidden\" name=\"dataFormatada[]\" value=\"" + dataFormatada + "\">";
		tabelaListaCurriculos += "</table>";		
		
		
		// limpa formulário do curriculo		
		 $(".curriculos #CurriculoAddForm").find(":input").each(function() {
		        switch(this.type) {
		            case "password":
		            case "select-multiple":
		            case "select-one":
		            case "text":
		            case "textarea":
		                $(this).val("");
		                break;
		            case "checkbox":
		            case "radio":
		                this.checked = false;
		        }
		 });		
		
		
		$(".curriculos #divFormCurriculo").hide();
		$(".curriculos #listaCurriculos").append(tabelaListaCurriculos);
		$(this).hide();	
		$("#btnAddCurriculo").show();		
		$("#btnExcluirCurriculo").show();		
	});
	
		
	//remove curriculos
	$("#btnExcluirCurriculo").click(function(){
		if(confirm("Deseja realmente excluir os currículos selecionados?")) {		 			
			$(".curriculos #listaCurriculos").find("input:checkbox").each(function(){											
				if(this.checked){				
					idCurriculo = $(this).attr("value");
					$(this).remove();
					$("#tabelaCurriculo"+idCurriculo).remove();				
				}																
			});
		}
		
	});	
		
	
	//remove campos de telefone
	$("#btnRemoveTelefone").click(function(){
		$(".telefones").find("input:checkbox").each(function(){											
			if(this.checked){				
				linha = $(this).attr("value");
				$(".txtExcluir").remove();
				//$(this).remove();
				$("#tel"+linha).remove();				
			}																
		});
	});
	
	
	// adiciona formulario de cadastro de curriculo
	$("#btnAddCurriculo").click(function(){
		$(".curriculos #divFormCurriculo").show();
		$("#loading").show();	
		$("#btnAddCurriculo").hide();		
		$.get("/cadastro_cultural/curriculos/add", {           		   
     		    }, function(resposta){
   		        //Tratamento dos dados de retorno
					$("#loading").hide();   		        	
           			$(".curriculos #divFormCurriculo").html(resposta); 
       		   }
       	);	       	
       	$("#btnSalvarCurriculo").show();
	});			
	
		
  });', array('inline' => false));
  
//echo $this->element('tiny_mce');
?>



<div class="pfs form">
<?php echo $this->Form->create('Pf');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Pf', true)); ?></legend>
	<?php				
		//echo "<a href='#' id='teste' class='btnRemoveTelefone'>hjhj</a>";
		$sexo = array('M' => 'Masculino', 'F' => 'Feminino');
		echo $this->Form->input('nacionalidade_id');
		echo $this->Form->input('naturalidade_id');
		echo $this->Form->input('expedidor_rg_id');
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('escolaridade_id');
		//echo $this->Form->input('tipologia_id');
		echo $this->Form->input('pais_id');
		
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
		echo $this->Html->div('', $elo, array('id' => 'divComboElo'));
				
		
		echo $this->Form->input('nome');
		echo $this->Form->input('nome_artistico');
		echo $this->Form->input('naturalizado');
		echo $this->Form->input('data_naturalizacao', array('dateFormat' => 'DMY'));
		echo $this->Form->input('tipo_visto');
		echo $this->Form->input('data_validade_visto', array('dateFormat' => 'DMY'));
		echo $this->Form->input('data_nascimento', array('dateFormat' => 'DMY'));
		echo $this->Form->input('sexo', array('type' => 'select', 'options' => $sexo, 'empty' => true));
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('data_rg', array('dateFormat' => 'DMY'));
		echo $this->Form->input('ano_graduacao');
		echo $this->Form->input('curso');
		echo $this->Form->input('profissao');
		echo $this->Form->input('logradouro');
		echo $this->Form->input('numero');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep');
		echo $this->Form->input('comprovante');
				
		$btnAddTel = $form->button('Adicionar telefone', array('id' => 'btnAddTelefone', 'style'=>'margin:0 0 10px 0', 'type'=>'button'));	
		$btnRemoveTel = $form->button('Remover telefone', array('id' => 'btnRemoveTelefone', 'style'=>'margin:0 0 10px 0', 'type'=>'button'));				
		$divFormCurriculo = $this->Html->div('', '', array('id' => 'divFormCurriculo'));		
		$btnAddCurriculo = $form->button('Adicionar currículo', array('id' => 'btnAddCurriculo', 'style'=>'margin:0 0 10px 0', 'type'=>'button'));
		$btnSalvarCurriculo = $this->Form->button('Salvar Curriculo', array('type'=>'button', 'id'=>'btnSalvarCurriculo'));		
		$listaCurriculos = $this->Html->div('listaCurriculos', '', array('id' => 'listaCurriculos'));		
		$btnExcluirCurriculo = $this->Form->button('Excluir Curriculos', array('type'=>'button', 'id'=>'btnExcluirCurriculo'));				
				
		echo $this->Html->tag('fieldset', '<legend>Telefones</legend>' . $btnAddTel . $btnRemoveTel . '<br>', array('class' => 'telefones'));			
		echo $this->Html->tag('br', '');
		
		echo $this->Html->tag('fieldset', '<legend>Currículo</legend>' . $this->Html->div('', 'Aguarde carregando...', array('id' => 'loading')) . $listaCurriculos . '<br>' . $btnAddCurriculo . $btnExcluirCurriculo . $divFormCurriculo . $btnSalvarCurriculo, array('class' => 'curriculos'));		
		
										
		
		echo $this->Form->input('representante_oficial');
		echo $this->Form->input('representante_nome');
		echo $this->Form->input('representante_cpf');
		echo $this->Form->input('representante_rg');
		echo $this->Form->input('representante_dataexpedicao_rg');
		echo $this->Form->input('representante_expedidor_rg');
		echo $this->Form->input('representante_telefone');
		echo $this->Form->input('representante_celular');
		echo $this->Form->input('representante_email');
		echo $this->Form->input('representante_delegacao');
		echo $this->Form->input('deletado');
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