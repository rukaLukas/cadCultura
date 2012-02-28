<?php
// Incluir o jQuery ao projeto
// Neste exemplo estou importando a jquery.tablesorter tamb�m
// O segundo par�metro (false) � para indicar que vai no <head> e n�o no local onde est� sendo executado
$javascript->link(array('jquery'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){		
	
	//carrega combobox atividade
	$("#PfAtividadeId").change(function(){											
		$.get("/cadastro_cultural/pfs/combo_elos/", {		    
		    }, function(resposta){
		        //Tratamento dos dados de retorno
    			$("#divComboElo").html(resposta); 	   
		   }
		);
			        									
	});		
						
			
  });', array('inline' => false));
  
//echo $this->element('tiny_mce');
?>


<?php echo $this->Form->create('Pf');?>
	<!--<fieldset>--> 		
	<?php		
		//echo $this->Html->div('listaCurriculos', 'conteudo curriculo', array('id' => 'listaCurriculos'));
		echo $this->Form->input('atividade_id', array('empty' => true));
	?>
<!--</fieldset>-->
