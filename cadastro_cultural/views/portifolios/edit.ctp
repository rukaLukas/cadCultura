

<?php echo $this->Session->flash(); ?>
    
<?php    echo $form->create('Portifolio',array('id'=>'PortifolioAddForm'));?>
    	<fieldset>
		<legend><?php __('Editar Portifolio'); ?></legend>
<?php echo $form->input('index', array('type'=>'hidden','name'=> 'data[Port][index]',"value"=> $this->data["Port"]["index"]));?>
   <div class="cont_2_1_1">
       <div class="gridLayou2">
        <?php echo $form->input('descricao_atividade',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Port][descricao_atividade]',"value"=> $this->data["Port"]["descricao_atividade"]));?>
       </div>
       <div class="gridLayou1">
        <?php echo $form->input('ano',array('maxlength'=>'4','label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Port][ano]',"value"=> $this->data["Port"]["ano"]));?>
       </div>
       <div class="gridLayou1">
        <?php echo $form->input('mes',array('maxlength'=>'2','label'=> array('class'=>'formAbas'),'size'=>'10','name'=> 'data[Port][mes]',"value"=> $this->data["Port"]["mes"]));?>
       </div>
   </div>
   <div class="cont_2_1_1">
       <div class="gridLayou2">
        <?php echo $form->input('funcao',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Port][funcao]',"value"=> $this->data["Port"]["funcao"]));?>
       </div>
       <div class="gridLayou2">
        <?php echo $form->input('empresa',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Port][empresa]',"value"=> $this->data["Port"]["empresa"]));?>
       </div>
   </div>
   <div class="cont_2_1_1">
        <div class="gridLayou2">
         <?php echo $form->input('ato_constituicao',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Port][ato_constituicao]',"value"=> $this->data["Port"]["ato_constituicao"]));?>
        </div>
        <div class="gridLayou2">
         <?php echo $form->input('anexo_ato',array('label'=> array('class'=>'formAbas'),'size'=>'40','name'=> 'data[Port][anexo_ato]',"value"=> $this->data["Port"]["anexo_ato"]));?>
       </div>
   </div>
         </fieldset>
<div class="cont_4"><br style="clear:both" />
    <div class="gridLayou4" style="">
        <input type="button" class="botaoAba" onclick="cancelarItem('#portifolio');" value="Caneclar"/>
    <input type="button" class="botaoAba" onclick="salvarItem('true','#PortifolioAddForm','portifolios','#portifolio','#portifolios');" value="Salvar"/>
</div>
</div>


