<?php  
echo $this->Form->input('UnidadeExecutora.enderecao_da_sede', array('readonly' => 'true', 'disabled'=> 'disabled', 'id' => 'endereco_sede', 'value' => $unidade_executora['UnidadeExecutora']['endereco_da_sede']));
echo $this->Form->input('Endereço Eletrônico', array('readonly' => 'true', 'disabled'=> 'disabled', 'value' => $unidade_executora['UnidadeExecutora']['endereco_eletronico']));
echo $this->Form->input('Forma de Contato', array('readonly' => 'true', 'disabled'=> 'disabled', 'value' => $unidade_executora['UnidadeExecutora']['forma_de_contato']));
?>