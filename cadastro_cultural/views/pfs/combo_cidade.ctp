<?php echo $this->Form->create('Pf');?>
	<label for="lblCnpj">Cidade<span class="obrigatorio">*</span></label><br>	 	
	<?php		
		echo $this->Form->input('cidade_id', array('label' => false));
	?>	
