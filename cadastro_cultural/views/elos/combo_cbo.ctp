<?php
// Incluir o jQuery ao projeto
// Neste exemplo estou importando a jquery.tablesorter tamb�m
// O segundo par�metro (false) � para indicar que vai no <head> e n�o no local onde est� sendo executado
$javascript->link(array('jquery'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){				
	
	//carrega combobox atividade
	$("#EloAtividadeId").change(function(){
		var tipo = $(this).attr("tipo");
		
		// se tiver vindo do formulario de cadastro do elo, então tipo ñ eh vazio
		if(tipo == 1){			
			$.get("/cadastro_cultural/elos/combo_elos/PF/"+tipo, {		    
			    }, function(resposta){
			        //Tratamento dos dados de retorno
	    			$("#divComboElo").html(resposta); 	   
			   }
			);			        								
		}	
		else{			
			$.get("/cadastro_cultural/elos/combo_elos/PF", {		    
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


<?php echo $this->Form->create('Elo');?>
	<!--<fieldset>--> 		
	<?php		
		//echo $this->Html->div('listaCurriculos', 'conteudo curriculo', array('id' => 'listaCurriculos'));		
			echo $this->Form->input('atividade_id', array('empty' => true, 'class' => 'input select required', 'tipo' => $tipo));
	?>
<!--</fieldset>-->
