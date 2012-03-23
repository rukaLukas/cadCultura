<?php
// Incluir o jQuery ao projeto
// Neste exemplo estou importando a jquery.tablesorter tamb�m
// O segundo par�metro (false) � para indicar que vai no <head> e n�o no local onde est� sendo executado
$javascript->link(array('jquery','jquery.validate'), true);

// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){				
	
	$("#listaElos").hide();
	$("#pop").hide();	
	$("#PfAno").mask("9999");
	
	$("#btnClose").click(function(){
		$("#PfAno").val("");
		$("#pop").hide();
		return false;
	});

	contadorElosAtividade = 0;
	$("#btnAno").click(function(){
		if($("#PfAno").val() == ""){
			alert("Informe o ano");
			return false;
		}
		else{
		
			contadorElosAtividade++;
		
		$("#PfSegmentoId").find("option").each(function(){															
			if(this.selected){				
				segmento = this.text;						 									
				segmentoId = this.value;				
			}																		
		});
		
		contadorAtividades = 0;
		$("#PfAtividadeAdicionadas").find("option").each(function(){			 														
			if(this.selected){			
				if(contadorAtividades == 0){			
					atividade = this.text;
					atividadeId = this.value;
				}
				else{		
					atividade += " ," + this.text;
					atividadeId += 	" ," + this.value;											
				}
				contadorAtividades++; 									
			}																			
		});
		
		contadorElos = 0;
		$("#PfEloId").find("option").each(function(){						 															
			if(this.selected){			
				if(contadorElos == 0){			
					elo = this.text;
					eloId = this.value;
				}
				else{		
					elo += ", " + this.text;
					eloId += 	"," + this.value;											
				}
				contadorElos++; 									
			}																			
		});	
		
		
		ano = $("#PfAno").val();				
		tipologia = segmentoId + eloId;
		//verifica se ja existe uma area de atuação com memso padrão de tipologia ja adicionado
		$("#listaElos").find("input:hidden").each(function(){
			if($(".tipologia").val() == tipologia)
				tipologiaCheck = 1;
			if(tipologiaCheck == 1){
				alert("Esse elo já existe pra essa ocupação adicionado");
				event.preventDefault();								
			}			
		});											
		
		var tabelaListaElos = "";				
		tabelaListaElos += "<table id=\"tabelaElos" + contadorElosAtividade + "\">";
		tabelaListaElos += "<tr><th width=\"20\">Ano</th><th width=\"20\">Excluir</th><th>Segmento</th><th>Atividade</th><th>Elo</th></tr>";
		tabelaListaElos += "<tr><td><span class=\"txtExcluir\"><input type=\"checkbox\" class=\"excluir\" value=\"" + contadorElosAtividade + "\" />&nbsp;</span></td>";
		tabelaListaElos += "<td class=\"ano\">" + ano + "</td>";
		tabelaListaElos += "<td class=\"segmento\">" + segmento + "</td>";
		tabelaListaElos += "<td class=\"atividade\">" + atividade + "</td>";
		tabelaListaElos += "<td class=\"elo\">" + elo + "</td></tr>";						
		tabelaListaElos += "<input type=\"hidden\" name=\"ano[]\" id=\"ano"+contadorElosAtividade+"\" value=\"" + ano + "\">";
		tabelaListaElos += "<input type=\"hidden\" name=\"segmento[]\" id=\"segmentoId"+contadorElosAtividade+"\" value=\"" + segmentoId + "\">";
		tabelaListaElos += "<input type=\"hidden\" name=\"atividade[]\" id=\"atividadeId"+contadorElosAtividade+"\" value=\"" + atividadeId + "\">";
		tabelaListaElos += "<input type=\"hidden\" name=\"elo[]\" id=\"eloId"+contadorElosAtividade+"\" value=\"" + eloId + "\">";				
		tabelaListaElos += "</table>";								
		
		$("#PfContadorEloAtividade").val(contadorElosAtividade);
							
		//$("#listaElos").show();		
		$("#listaElos").append(tabelaListaElos);
		$("#pop").hide();		
		}
	});

	
	$("#btnAddAtividade").click(function(){
		contadorAdd = 0;
		$("#PfAtividadeId").find("option").each(function(){
			checkValor = 0;															
			if(this.selected){
				valor = this.value;
				//verifica se esse valor já existe no outro combo
				$("#PfAtividadeAdicionadas").find("option").each(function(){
					if(this.value == valor)
						checkValor = 1; 
				});
				if(checkValor != 1)											
					$("#PfAtividadeAdicionadas").append("<option value="+valor+">"+this.text+"</option>");
					
				contadorAdd++; 									
			}																					
		});
		if(contadorAdd == 0)
			alert("Selecione uma atividade e depois clique em adicionar");
	});
	
	
	$("#btnRemoveAtividade").click(function(){
		contadorRem = 0;
		$("#PfAtividadeAdicionadas").find("option").each(function(){															
			if(this.selected){				
				$(this).remove();
				contadorRem++;				 									
			}																		
		});
		if(contadorRem == 0)
			alert("Selecione uma atividade e depois clique em remover");
		if(contadorRem != 0){
			$("#PfEloId").find("option").each(function(){																						
				$(this).remove();				 																											
			});
		}
		
		
	});
	

	$("#btnRemoveElo").click(function(){
		existElo = 0;
		if(confirm("Deseja realmente excluir o(s) Elo(s) selecionado(s)?")) {		 			
			$("#listaElos").find("input:checkbox").each(function(){											
				if(this.checked){				
					id = $(this).attr("value");
					$(this).remove();
					$("#tabelaElos"+id).remove();				
				}																
			});
		}
		$("#listaElos").find("input:checkbox").each(function(){													
			existElo = 1;																
		});
		if(existElo == 0)
			$("#btnRemoveElo").hide();
	});
	
	
	contadorElosAtividade = 0;
	$("#btnAddEloAtividade").click(function(){
	
		//abre janela pra informar ano da area de atuação
		$("#listaElos").show();		
		$("#pop").show();							
		/*
		contadorElosAtividade++;
		
		$("#PfSegmentoId").find("option").each(function(){															
			if(this.selected){				
				segmento = this.text;						 									
				segmentoId = this.value;				
			}																		
		});
		
		contadorAtividades = 0;
		$("#PfAtividadeAdicionadas").find("option").each(function(){			 														
			if(this.selected){			
				if(contadorAtividades == 0){			
					atividade = this.text;
					atividadeId = this.value;
				}
				else{		
					atividade += " ," + this.text;
					atividadeId += 	" ," + this.value;											
				}
				contadorAtividades++; 									
			}																			
		});
		
		contadorElos = 0;
		$("#PfEloId").find("option").each(function(){						 															
			if(this.selected){			
				if(contadorElos == 0){			
					elo = this.text;
					eloId = this.value;
				}
				else{		
					elo += ", " + this.text;
					eloId += 	"," + this.value;											
				}
				contadorElos++; 									
			}																			
		});	
		
		
		tipologia = segmentoId + eloId;
		$("#listaElos").find("input:hidden").each(function(){
			if($(".tipologia").val() == tipologia)
				tipologiaCheck = 1;
			if(tipologiaCheck == 1){
				alert("Esse elo já existe pra essa ocupação adicionado");
				event.preventDefault();								
			}			
		});											
		
		var tabelaListaElos = "";				
		tabelaListaElos += "<table id=\"tabelaElos" + contadorElosAtividade + "\">";
		tabelaListaElos += "<tr><th width=\"20\">Excluir</th><th>Segmento</th><th>Atividade</th><th>Elo</th></tr>";
		tabelaListaElos += "<tr><td><span class=\"txtExcluir\"><input type=\"checkbox\" class=\"excluir\" value=\"" + contadorElosAtividade + "\" />&nbsp;</span></td>";
		tabelaListaElos += "<td class=\"segmento\">" + segmento + "</td>";
		tabelaListaElos += "<td class=\"atividade\">" + atividade + "</td>";
		tabelaListaElos += "<td class=\"elo\">" + elo + "</td></tr>";						
		tabelaListaElos += "<input type=\"hidden\" name=\"segmento[]\" id=\"segmentoId"+contadorElosAtividade+"\" value=\"" + segmentoId + "\">";
		tabelaListaElos += "<input type=\"hidden\" name=\"atividade[]\" id=\"atividadeId"+contadorElosAtividade+"\" value=\"" + atividadeId + "\">";
		tabelaListaElos += "<input type=\"hidden\" name=\"elo[]\" id=\"eloId"+contadorElosAtividade+"\" value=\"" + eloId + "\">";		
		tabelaListaElos += "</table>";								
							
		$("#listaElos").show();		
		$("#listaElos").append(tabelaListaElos);
		*/				
	});
	
	
	
	//carrega combobox atividade
	$("#PfAtividadeAdicionadas").change(function(){
		var tipo = $(this).attr("tipo");
		var cbo = $(this).val();						
				
		// se tiver vindo do formulario de cadastro do elo, então tipo ñ eh vazio
		if(tipo == 1){			
			$.get("/cadastro_cultural/pfs/combo_elos/PF/"+tipo+"/", {		    
			    }, function(resposta){
			        //Tratamento dos dados de retorno
	    			$("#divComboElo").html(resposta); 	   
			   }
			);			        								
		}	
		else{			
			$.get("/cadastro_cultural/pfs/combo_elos/PF/nd/"+cbo, {		    
			    }, function(resposta){
			        //Tratamento dos dados de retorno
	    			$("#divComboElo").html(resposta); 	   
			   }
			);
		}				
	});		
						
			
  });', array('inline' => false));
if(!empty($this->params['pass']['2']))  
	$tipo = $this->params['pass']['2'];
else
	$tipo = "";	
  
//echo $this->element('tiny_mce');
?>


<?php echo $this->Form->create('Pf');?>
	<!--<fieldset>--> 		
	<?php		
		//echo $this->Html->div('listaCurriculos', 'conteudo curriculo', array('id' => 'listaCurriculos'));
			$btnAddAtividade = $this->Form->button('Adicionar >>', array('type'=>'button', 'id'=>'btnAddAtividade'));			
			$btnRemoveAtividade = $this->Form->button('<< Retirar', array('type'=>'button', 'id'=>'btnRemoveAtividade'));
			$btns = $this->Html->div('', $btnAddAtividade . '<br>' . $btnRemoveAtividade, array('id' => 'btns'));
			$cbElo = $this->Form->input('elo_id', array('multiple' => true, 'label' => 'Elos'));
			$elos = $this->Html->div('', $cbElo, array('id' => 'divComboElo'));
			$btnAddEloAtividade = $this->Form->button('+ Adicionar Elo', array('type'=>'button', 'id'=>'btnAddEloAtividade'));
			$btns2 = $this->Html->div('', $btnAddEloAtividade, array('id' => 'btns2'));
			$btnExcluirElo = $this->Form->button('Excluir Elos Selecionados', array('type'=>'button', 'id'=>'btnRemoveElo'));
									
			$cbAtividade = $this->Form->input('atividade_id', array('multiple' => true, 'tipo' => $tipo));			
			$cbAtividade2 =  $this->Form->input('atividadeAdicionadas', array('label' => 'Atividades Adicionadas','multiple' => true, 'type' => 'select', 'tipo' => $tipo));
			echo $this->Html->div('areaAtuacao', $cbAtividade . $btns . $cbAtividade2 . $elos . $btns2, array('id' => 'areaAtuacao'));
						
			$tabela = "<table><tr><th colspan=\"4\">Área de Atuação - Elo x Função</th></tr>";
			
			echo $this->Html->div('', $btnExcluirElo . $tabela, array('id' => 'listaElos'));
			
			$anoAreaAtuacao = $this->Form->input('ano',array('style' => 'width:65px'));			
			$btnAno = $this->Form->button('Ok', array('type'=>'button', 'id'=>'btnAno', 'style' => 'float:left; margin:30px 0 0 5px'));
			$eleFormAno = $this->Html->div('', $anoAreaAtuacao, array('style' => 'text-align:left; width:70px; float:left; margin-left:40px'));					
			$imgClose = $this->Html->link(
								$this->Html->image('close.png', array('border' => '0', 'style' => 'float:right')),
								array('#'),
								array('escape' => false, 'id' => 'btnClose')
							);										
			$topoPop = $this->Html->div('', 'Ano Área de atuação' . $imgClose, array('id' => 'titulo'));
			echo $this->Html->div('', $topoPop . '<p align=center>Informe o ano dessa área de atuação</p>' . $eleFormAno . $btnAno, array('id' => 'pop'));																					
	?>
<!--</fieldset>-->
