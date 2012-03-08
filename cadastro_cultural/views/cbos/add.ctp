<?php
$javascript->link(array('jquery','jquery.validate'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){		
	
	$("#CboAddForm").validate({		            	            			            		
			rules: {
				"data[Cbo][nomcbo]": { required: true },
				"data[Cbo][codcbo]": { required: true },
				"data[Cbo][segmento_id]": { required: true }									        		
			}	        				        		
	});  				
  });', array('inline' => false));  
?>

<div class="cbos form">
<?php echo $this->Form->create('Cbo');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Cbo', true)); ?></legend>
	<?php
		echo $this->Form->input('segmento_id', array('empty' => true, 'name' => 'data[Cbo][segmentocultural_id]'));		
		echo $this->Form->input('codcbo', array('label' => 'Código'));
		echo $this->Form->input('nomcbo', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Cbo', true)), array('action' => 'index')); ?></li>
	</ul>
</div>