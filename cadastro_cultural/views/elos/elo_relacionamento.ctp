<?php
$javascript->link(array('jquery','jquery.validate','jquery.form'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){		
	$("#mensagem").hide();
	/*
	$("#EloEloRelacionamentoForm").validate({		            	            			            		
			rules: {
				"data[Elo][grupotipologia]": { required: true },
				"data[Elo][segmento_id]": { required: true }																	        		
			},
			submitHandler: function(form) {				
				//v = validaSubmit();
				//if(v == true){
					$(form).ajaxSubmit({
						dataType : "html",

						success : response
					});
				//}			
			}	        				        		
	}); 		
		
	function response(data) {						
			var mensagem;

			if (data == "true") {
				$("#EloEloRelacionamentoForm").resetForm();				
				mensagem = "Mensagem Enviada";
			} else {
				mensagem = "Não foi possível validar os dados";
			}
			$("#mensagem").html(mensagem);			
	}
	*/	
			
	
	// Quando o formulário for enviado, essa função é chamada
	$("#EloEloRelacionamentoAddForm").submit(function() {			
		v = validaSubmit();
		if(v == true){						
			// Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
			var grupoTipologia = $("#EloTipoGrupo").val();
			var grupoTipologiaId = $("#EloTipoGrupoId").val();
			var elo = $("#EloEloId").val();
			var atividade = $("#EloAtividadeId").val();	
			var segmentoId = $("#EloSegmentoId").val();	
			// Exibe mensagem de carregamento
			$("#mensagem").html("Enviando...");
			// Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
			$.post("/cadastro_cultural/elos/elo_relacionamentoAdd", {grupotipologia: grupoTipologia, 
																	 grupotipologiaId: grupoTipologiaId,
																	 elo: elo,
																	 atividade: atividade,
																	 segmento: segmentoId  
																	 }, function(resposta) {
					// Quando terminada a requisição
					// Exibe a div status
					$("#mensagem").slideDown();
					// Se a resposta é um erro	
					// Exibe mensagem de retorno
					$("#mensagem").html(resposta);
					// se ja existe relação elo para o padrão tipologia
					// seleciona o elo existente no combo
					
					var idEloExistente;						
					$("#mensagem").find("input:text").each(function(){
						idEloExistente = this.value;
						 $("#divComboElo #PfEloId option[value=\'"+idEloExistente+"\']").attr(\'selected\', \'selected\');																											 																																					
					});					
					if(idEloExistente == ""){
						$("#EloGrupotipologiaId").val("");
						$("#EloSegmentoId").val("");
						$("#PfAtividadeId").val("");
						$("#PfEloId").val("");
					}
			});		
		}
		return false;		
	});
	
	
	
	
	function validaSubmit(){
		contador = 0;
		contadorElo = 0;
		elos = "";
		eloTipoGrupo = "";						
		eloAtividade = "";
		eloTipoGrupoId = "";
		
		$("#EloGrupotipologiaId").find("option").each(function(){															
			if(this.selected){											
				eloTipoGrupo += this.text;	
				eloTipoGrupoId += this.value;
				contador++;			 								
			}																		
		});
		
		$("#PfAtividadeId").find("option").each(function(){															
			if(this.selected){											
				eloAtividade += this.value;
				contador++;				 								
			}																		
		});
		
		$("#EloSegmentoId").find("option").each(function(){															
			if(this.selected){															
				contador++;				 								
			}																		
		});									
									
		$("#divComboElo #PfEloId").find("option").each(function(){															
			if(this.selected){				
				if(contadorElo == 0)			
					elos += this.value;
				else		
					elos += "," + this.value;												
				
				contador++; 									
				contadorElo++;
			}																		
		});
						
		$("#EloEloId").val(elos);
		$("#EloAtividadeId").val(eloAtividade);
		$("#EloTipoGrupo").val(eloTipoGrupo);	
		$("#EloTipoGrupoId").val(eloTipoGrupoId);
		
		
		if(contador > 3)
			return true;
		else
			return false;
				
	}			
	
	
	
	
	
	/*
	$("#PfAtividadeId").find("option").each(function(){															
			if(this.selected){				
				if(contador == 0)			
					atividade += this.text;
				else		
					produtos += " ," + this.text;												
				
				contador++; 									
			}																		
		});
	*/
	
	
	
	$("#EloGrupotipologiaId").change(function(){
			$(this).find("option").each(function(){											
				if(this.selected){				
					grupoTipologia = $(this).text();					
				}																
			}); 
	});
			
	
	$("#EloSegmentoId").change(function(){			
		var segmento = $(this).val();

		if(grupoTipologia == "PJ"){
			$.get("/cadastro_cultural/pjs/combo_cnae/"+segmento+"/"+grupoTipologia+"/1", {		    
			    }, function(resposta){
			        //Tratamento dos dados de retorno
	    			$("#divComboCBO").html(resposta); 	   
			   }
			);		
		}
		if(grupoTipologia == "PF"){			
			$.get("/cadastro_cultural/pfs/combo_cbo/"+segmento+"/"+grupoTipologia+"/1", {		    
			    }, function(resposta){
			        //Tratamento dos dados de retorno
	    			$("#divComboCBO").html(resposta); 	   
			   }
			);		
		}									        									
	});
		
					
  });', array('inline' => false));
?>

<div class="cbos form">
<?php echo $this->Form->create('Elo', array('action' => 'elo_relacionamentoAdd'));?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Elo', true)); ?></legend>
	<?php		
		echo $this->Form->input('grupotipologia_id', array('empty' => true, 'label' => 'Grupo Tipologia', 'name' => 'data[Elo][grupotipologia]'));
		echo $this->Form->input('segmento_id', array('empty' => true));
		$opcoesAtividade = array('0'=>'Selecione um Segmento');
		$opcoesElo = array('0'=>'Selecione uma atividade');
		$elo = $this->Form->input('elo', array('type' => 'select', 
													'label' => 'Elo', 
													'options' => $opcoesElo
													));
		$atividade = $this->Form->input('atividade', array('type' => 'select', 
													'label' => 'Atividade', 
													'options' => $opcoesAtividade
													));
		echo $this->Html->div('', $atividade, array('id' => 'divComboCBO'));
		echo $this->Html->div('', $elo, array('id' => 'divComboElo'));	
		echo $this->Form->input('identificador', array('type' => 'hidden', 'value' => 'elo'));											
		echo $this->Form->input('tipoGrupo', array('type' => 'hidden'));
		echo $this->Form->input('tipoGrupoId', array('type' => 'hidden'));
		echo $this->Form->input('eloId', array('type' => 'hidden'));
		echo $this->Form->input('atividadeId', array('type' => 'hidden'));	
		echo $this->Html->div('', '', array('id' => 'mensagem'));	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Elo', true)), array('action' => 'index')); ?></li>
	</ul>
</div>