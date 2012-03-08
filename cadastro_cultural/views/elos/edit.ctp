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
 		<legend><?php printf(__('Editar %s', true), __('Cbo', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('segmento_id');		
		echo $this->Form->input('codcbo');
		echo $this->Form->input('nomcbo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Cbo', true)), array('action' => 'delete', $this->Form->value('Cbo.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('Cbo.id'))); ?></li>-->
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Cbo', true)), array('action' => 'index')); ?> </li>				
	</ul>
</div>