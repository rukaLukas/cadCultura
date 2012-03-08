<?php
$javascript->link(array('jquery','jquery.validate'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){	
	
	$("#CnaesAddForm").validate({		            	            			            		
			rules: {
				"data[Cnaes][nomcnae]": { required: true },
				"data[Cnaes][codcnae]": { required: true },
				"data[Cbo][segmento_id]": { required: true }													        		
			}	        				        		
	});  				
  });', array('inline' => false));
?>

<div class="cnae form">
<?php echo $this->Form->create('Atividade');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Atividade Econômica', true)); ?></legend>
	<?php
		echo $this->Form->input('segmento_id', array('empty' => true));
		echo $this->Form->input('nomcnae', array('label' => 'Nome Atividade Econômica'));
		echo $this->Form->input('codcnae', array('label' => 'Código da Atividade Econômica'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>		
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Atividade', true)), array('action' => 'index')); ?></li>
	</ul>
</div>