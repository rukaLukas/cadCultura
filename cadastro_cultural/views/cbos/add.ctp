<?php
$javascript->link(array('jquery','jquery.validate'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){		
	
	$("#CboAddForm").validate({		            	            			            		
			rules: {
				"data[Cbo][nomcbo]": { required: true, minlength: 2 },
				"data[Cbo][codcbo]": { required: true, minlength: 2 },
				"data[Cbo][segmento_id]": { required: true }									        		
			}	        				        		
	});  				
  });', array('inline' => false));
?>

<div class="cbos form">
<?php echo $this->Form->create('Cbo');?>
	<fieldset>
 		<legend><?php __('Add Cbo'); ?></legend>
	<?php
		echo $this->Form->input('segmento_id', array('empty' => true));
		/*
		echo $this->Form->input('grupoTipologia_id', array('type' => 'select', 'multiple' => true, 
															'options' => $grupoTipologias));
		*/	
		echo $this->Form->input('codcbo');
		echo $this->Form->input('nomcbo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cbos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipologias', true), array('controller' => 'tipologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologia', true), array('controller' => 'tipologias', 'action' => 'add')); ?> </li>
	</ul>
</div>