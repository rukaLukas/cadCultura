<?php
$javascript->link(array('jquery','jquery.validate'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){		
	
	$("#EloAddForm").validate({		            	            			            		
			rules: {				
				"data[Elo][nomelo]": { required: true }									        		
			}	        				        		
	});
	
	
	  				
  });', array('inline' => false));
?>

<div class="cbos form">
<?php echo $this->Form->create('Elo');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Elo', true)); ?></legend>
	<?php				
		echo $this->Form->input('nomelo', array('label' => 'Nome'));
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