<?php
$javascript->link(array('jquery','jquery.validate'), false);
// Aqui vou definir alguns comandos de jQuery
$javascript->codeBlock('
  $(document).ready(function(){	
	
	$("#CnaesAddForm").validate({		            	            			            		
			rules: {
				"data[Cnaes][nomcnae]": { required: true, minlength: 2 },
				"data[Cnaes][codcnae]": { required: true, minlength: 2 }													        		
			}	        				        		
	});  				
  });', array('inline' => false));
?>

<div class="cnae form">
<?php echo $this->Form->create('Cnaes');?>
	<fieldset>
 		<legend><?php __('Add Cnaes'); ?></legend>
	<?php
		echo $this->Form->input('nomcnae');
		echo $this->Form->input('codcnae');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cnae', true), array('action' => 'index'));?></li>
	</ul>
</div>