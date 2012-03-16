

<?php echo $this->Session->flash(); ?>

<?php    echo $form->create('ConselhoAdministracao',array('id'=>'ConselhoAdministracaoAddForm'));?>
    	<fieldset>
		<legend><?php __('Editar Conselho Administração'); ?></legend>
 <?php echo $form->input('index', array('type'=>'hidden','name'=> 'data[Ca][index]',"value"=> $this->data["Ca"]["index"]));?>
<div class="cont_2_1_1">
    <div class="gridLayou2">
     <?php echo $form->input('nome',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Ca][nome]',"value"=> $this->data["Ca"]["nome"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('cpf',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Ca][cpf]',"value"=> $this->data["Ca"]["cpf"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('rg',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Ca][rg]',"value"=> $this->data["Ca"]["rg"]));?>
    </div>
</div>
<div class="cont_2_2">
    <div class="gridLayou2">
     <?php echo $form->input('orgao_expedidor',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Ca][orgao_expedidor]',"value"=> $this->data["Ca"]["orgao_expedidor"]));?>
    </div>

    <div class="gridLayou2">
     <?php echo $form->input('data_expedicao',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Ca][data_expedicao]',"value"=> $this->data["Ca"]["data_expedicao"],"class"=>'data'));?>
    </div>

</div>
<div class="cont_2_2">
    <div class="gridLayou2">
     <?php echo $form->input('data_inicio_mandato',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Ca][data_inicio_mandato]',"value"=> $this->data["Ca"]["data_inicio_mandato"],"class"=>'data'));?>
    </div>
    <div class="gridLayou2">
    <?php echo $form->input('data_fim_mandato',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Ca][data_fim_mandato]',"value"=> $this->data["Ca"]["data_fim_mandato"],"class"=>'data'));?>
    </div>
</div>
         </fieldset>
<div class="cont_4"><br style="clear:both" />
    <div class="gridLayou4" style="">
    <input type="button" class="botaoAba" onclick="cancelarItem('#conselhoAdministracao');" value="Caneclar"/>
    <input type="button" class="botaoAba"  onclick="salvarItem('true','#ConselhoAdministracaoAddForm','conselhos_administracao','#conselhoAdministracao','#conselhosAdministracao');" value="Salvar"/>
</div>
</div>


