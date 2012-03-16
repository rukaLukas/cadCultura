

<?php echo $this->Session->flash(); ?>

<?php    echo $form->create('Representante',array('id'=>'RepresentanteAddForm'));?>
    	<fieldset>
		<legend><?php __('Editar Representante Legal'); ?></legend>
<?php

    echo $form->input('index', array('type'=>'hidden','name'=> 'data[Repre][index]',"value"=> $this->data["Repre"]["index"]));
    echo $form->input('nome',array('name'=> 'data[Repre][nome]',"value"=> $this->data["Repre"]["nome"]));
    echo $form->input('cpf',array('name'=> 'data[Repre][cpf]',"value"=> $this->data["Repre"]["cpf"]));
    echo $form->input('rg',array('name'=> 'data[Repre][rg]',"value"=> $this->data["Repre"]["rg"]));
    echo $form->input('data_expedicao',array('name'=> 'data[Repre][data_expedicao]',"value"=> $this->data["Repre"]["data_expedicao"]));
    echo $form->input('orgao_expedidor',array('name'=> 'data[Repre][orgao_expedidor]',"value"=> $this->data["Repre"]["orgao_expedidor"]));
    echo $form->input('cargo',array('name'=> 'data[Repre][cargo]',"value"=> $this->data["Repre"]["cargo"]));
    echo $form->input('telefone',array('name'=> 'data[Repre][telefone]',"value"=> $this->data["Repre"]["telefone"]));
    echo $form->input('celular',array('name'=> 'data[Repre][celular]',"value"=> $this->data["Repre"]["celular"]));
    echo $form->input('email',array('name'=> 'data[Repre][email]',"value"=> $this->data["Repre"]["email"]));
    echo $form->input('data_inicio_representacao',array('name'=> 'data[Repre][data_inicio_representacao]',"value"=> $this->data["Repre"]["data_inicio_representacao"]));
    echo $form->input('data_fim_representacao',array('name'=> 'data[Repre][data_fim_representacao]',"value"=> $this->data["Repre"]["data_fim_representacao"]));

 ?>
         </fieldset>
<div class="submit">
    <div class="submit">
    <input type="button" onclick="salvarItem('true','#RepresentanteAddForm','representantes','#representante','#representantes');" value="Salvar"/>
</div>
</div>


