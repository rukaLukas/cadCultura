

<?php echo $this->Session->flash(); ?>

<?php    echo $form->create('ConselhoFiscal',array('id'=>'ConselhoFiscalAddForm'));?>
    	<fieldset>
		<legend><?php __('Editar Conselho Fiscal'); ?></legend>


    <?php echo $form->input('index', array('type'=>'hidden','name'=> 'data[Cf][index]',"value"=> $this->data["Cf"]["index"]));?>
    <div class="cont_2_1_1">
    <div class="gridLayou2">
     <?php echo $form->input('nome',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Cf][nome]',"value"=> $this->data["Cf"]["nome"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('cpf',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Cf][cpf]',"value"=> $this->data["Cf"]["cpf"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('rg',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Cf][rg]',"value"=> $this->data["Cf"]["rg"]));?>
    </div>
</div>
<div class="cont_2_2">
    <div class="gridLayou2">
     <?php echo $form->input('orgao_expedidor',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Cf][orgao_expedidor]',"value"=> $this->data["Cf"]["orgao_expedidor"]));?>
    </div>
    <div class="gridLayou2">
     <?php echo $form->input('data_expedicao',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Cf][data_expedicao]',"value"=> $this->data["Cf"]["data_expedicao"],"class"=>'data'));?>
    </div>
</div>
<div class="cont_1_1">
    <div class="gridLayou1">
     <?php echo $form->input('data_inicio_mandato',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Cf][data_inicio_mandato]',"value"=> $this->data["Cf"]["data_inicio_mandato"],"class"=>'data'));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('data_fim_mandato',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Cf][data_fim_mandato]',"value"=> $this->data["Cf"]["data_fim_mandato"],"class"=>'data'));?>
    </div>
</div>
         </fieldset>
<div class="cont_4"><br style="clear:both" />
    <div class="gridLayou4" style="">
    <input type="button" class="botaoAba" onclick="cancelarItem('#conselhoFiscal');" value="Caneclar"/>
    <input type="button" class="botaoAba" onclick="salvarItem('true','#ConselhoFiscalAddForm','conselhos_fiscais','#conselhoFiscal','#conselhosFiscais');" value="Salvar"/>
</div>
</div>


