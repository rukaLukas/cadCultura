<script type="text/javascript">
    datepicker();
</script>
<?php echo $this->Session->flash(); ?>
    
<?php    echo $form->create('Dirigente');?>
    	<fieldset>
		<legend><?php __('Adicionar Outro Dirigente'); ?></legend>

<div class="cont_2_1_1">
    <div class="gridLayou2">
        <?php echo $form->input('nome',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Dir][nome]',"value"=> $this->data["Dir"]["nome"]));?>
    </div>
    <div class="gridLayou1">
        <?php echo $form->input('cpf',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Dir][cpf]',"value"=> $this->data["Dir"]["cpf"]));?>
    </div>
    <div class="gridLayou1">
        <?php echo $form->input('rg',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Dir][rg]',"value"=> $this->data["Dir"]["rg"]));?>
    </div>
</div>
<div class="cont_2_1_1">
    <div class="gridLayou2">
     <?php echo $form->input('orgao_expedidor',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Dir][orgao_expedidor]',"value"=> $this->data["Dir"]["orgao_expedidor"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('data_expedicao',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Dir][data_expedicao]',"value"=> $this->data["Dir"]["data_expedicao"],"class"=>'data'));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('cargo',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Dir][cargo]',"value"=> $this->data["Dir"]["cargo"]));?>
    </div>
</div>
<div class="cont_2_1_1">
    <div class="gridLayou2">
     <?php echo $form->input('email',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Dir][email]',"value"=> $this->data["Dir"]["email"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('telefone',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Dir][telefone]',"value"=> $this->data["Dir"]["telefone"]));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('celular',array('label'=> array('class'=>'formAbas'),'size'=>'20','name'=> 'data[Dir][celular]',"value"=> $this->data["Dir"]["celular"]));?>
    </div>
</div>
<div class="cont_1_1">
    <div class="gridLayou1">
     <?php echo $form->input('data_inicio_mandato',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Dir][data_inicio_mandato]',"value"=> $this->data["Dir"]["data_inicio_mandato"],"class"=>'data'));?>
    </div>
    <div class="gridLayou1">
     <?php echo $form->input('data_fim_representacao',array('label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Dir][data_fim_mandato]',"value"=> $this->data["Dir"]["data_fim_mandato"],"class"=>'data'));?>
    </div>
</div>
    
 
         </fieldset>
<div class="cont_4"><br style="clear:both" />
    <div class="gridLayou4" style="">
        <input type="button" class="botaoAba" onclick="cancelarItem('#dirigente');" value="Caneclar"/>
        <input type="button" class="botaoAba" onclick="salvarItem('false','#DirigenteAddForm','dirigentes','#dirigente','#dirigentes');" value="Salvar"/>
    </div>
</div>


