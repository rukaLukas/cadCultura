
<?php echo $html->script('jquery.js'); ?>
<?php echo $html->script('jquery.validate.min.js'); ?>
<?php echo $html->script('jquery-ui-1.7.3.custom.min.js'); ?>
<?php echo $html->script('jquery.maskedinput-1.3.js'); ?>
<?php echo $html->script('pessoaJuridica.js'); ?>
<?php echo $html->css('ui-lightness/jquery-ui-1.7.3.custom.css'); ?>
<?php echo $html->css('estiloForm.css'); ?>
<?php echo $html->script('ato_convocatorio.js'); ?>
<?php echo $html->script('jquery.ui.datepicker-pt-BR.js'); ?>




<script type="text/javascript">
    var containerId = '#tabs-container';
    var tabsId = '#tabs';
    datepicker();

    
    
    $(document).ready(function(){
		$("#PessoaJuridicaCnpj").mask("99.999.999/9999-99");
                $("#PessoaJuridicaUtilidadePublicaS").click(function(event){clickEntidadeCivil("S");});
                $("#PessoaJuridicaUtilidadePublicaN").click(function(event){clickEntidadeCivil("N");});

                $("#PessoaJuridicaOscipS").click(function(event){clickOscip("S");});
                $("#PessoaJuridicaOscipN").click(function(event){clickOscip("N");});

                $("#PessoaJuridicaOsS").click(function(event){clickOs("S");});
                $("#PessoaJuridicaOsN").click(function(event){clickOs("N");});

                mudarTab = function(numeroTab) {
		$("#tabs-container"+numeroTab).addClass('visivel');
	};

	// carrega aba no evento onload da pagina
	if($(tabsId + ' LI.current A').length > 0){
		ID = $(tabsId + ' LI.current A').attr('id');
		mudarTab(ID);
	}

    $(tabsId + ' A').click(function(){
    	if($(this).parent().hasClass('current')){
        	return false;
        }
    	else{
    		// pricura a div que estiver visivel e deixa invisivel
    		$("#container").find(".visivel").each(function(){
    			$(this).removeClass('visivel');
			});

        	$(tabsId + ' LI.current').removeClass('current');
        	$(this).parent().addClass('current');

        	ID = $(this).attr('id');
    		mudarTab(ID);
            return false;
        }
    });

    $("#PessoaJuridicaAddForm").validate({

        rules:{
        "data[PessoaJuridica][razao_social]":{required: true},
        "data[PessoaJuridica][nome_fantasia]":{required: true},
        "data[PessoaJuridica][cnpj]":{required: true},
        "data[PessoaJuridica][data_fundacao]":{required: true},
        "data[PessoaJuridica][data_formalizacao]":{required: true},
        "data[PessoaJuridica][numero_documento_ec]":{required: true}
        },
        messages:{
         "data[PessoaJuridica][razao_social]":{required : 'Informe Razão Social'},
         "data[PessoaJuridica][nome_fantasia]":{required : 'Informe Nome Fantasia'},
         "data[PessoaJuridica][cnpj]":{required : 'Informe Cnpj'},
         "data[PessoaJuridica][data_fundacao]":{required : 'Informe Data Fundação'},
         "data[PessoaJuridica][data_formalizacao]":{required : 'Informe Data Formalização'}
        }
        });
		
	});

        function teste(){
        if($("#PessoaJuridicaAddForm").valid()){alert('passou');}else{alert('nao passou')};

        }
</script>
<?php echo $form->create('PessoaJuridica');?>
<div id="container">
    <ul id="tabs">
        <li class="current"><a id="1" href="#">Cnpj</a></li>
        <li><a id="2" href="#">Portifolio</a></li>
        <li><a id="3" href="#">Entidade Civil</a></li>
        <li><a id="4" href="#">Organiza&ccedil;&atilde;o Civil</a></li>
        <li><a id="5" href="#">Organiza&ccedil;&atilde;o Social</a></li>
        <li><a id="6" href="#">Representane Legal</a></li>
        <li><a id="7" href="#">Outros Dirigentes</a></li>
        <li><a id="8" href="#">Conselho Fiscal</a></li>
        <li><a id="9" href="#">Conselho Administra&ccedil;&atilde;o</a></li>
    </ul>



<div id="tabs-container1"  class="formulario">
       <div class="cont_1_3">
    
        <div class="gridLayou1">   
            <?php echo $form->input('razao_social',array('label'=> array('class'=>'formAbas'),'size'=>'20'));?>
         </div>
           <div class="gridLayou3">
            <?php echo $form->input('nome_fantasia',array('label'=> array('class'=>'formAbas'),'size'=>'60'));?>
           </div>
        
       </div>
       <div class="cont_2_1_1">
           <div class="gridLayou2">
                <?php echo $form->input('cnpj',array('label'=> array('class'=>'formAbas'),'size'=>'40'));?>
           </div>
           <div class="gridLayou1">
            <?php echo $form->input('data_fundacao',array('class'=>'data','label'=> array('class'=>'formAbas'),'size'=>'20'));?>
           </div>
           <div class="gridLayou1">
            <?php echo $form->input('data_formalizacao',array('class'=>'data','label'=> array('class'=>'formAbas'),'size'=>'20'));?>
           </div>
       </div>

    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="teste();" value="Seguinte"/>
        </div>
    </div>

</div>
    


<div id="tabs-container2" class="formulario">
    <a id="addPortifolio" onclick="showAddForm('portifolio','portifolios');">Criar Portifolio</a>


    <div id="portifolio">

    </div>

    <div id="portifolios">

    </div>

    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>
</div>

<div id="tabs-container3" class="formulario">

     <?php
            $options=array('S'=>'Sim','N'=>'N&atilde;o');
            $attributes=array('legend'=>false);
            $attributes['value'] = 'N';
            echo $this->Form->radio('utilidade_publica',$options,$attributes);
     ?>


    <div id="entidadeCivil" style="display: none" >

       <div class="cont_2_2">
           
           <div class="gridLayou2">
            <?php echo $form->select('esfera_id', $esferas,array('label' => array('class'=>'formAbas'),'size'=>'40'));?>
           </div>
         <div class="gridLayou2">
            <?php echo $form->input('tipo_documento_ec',array('label' => array('class'=>'formAbas'),'size'=>'40'));?>
         </div>
       </div>

        <div class="cont_1_2_1">
            <div class="gridLayou1">
                <?php echo $form->input('numero_documento_ec',array('class'=>'data','label' => array('class'=>'formAbas'),'size'=>'20'));?>
            </div>
            <div class="gridLayou2">
                <?php echo $form->input('orgao_publicacao_ec',array('class'=>'data','label' => array('class'=>'formAbas'),'size'=>'40'));?>
            </div>
            <div class="gridLayou1">
                <?php echo $form->input('data_publicacao_ec',array('class'=>'data','label' => array('class'=>'formAbas'),'size'=>'20'));?>

            </div>
        </div>
        


     </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="teste();" value="Seguinte"/>
        </div>
    </div>
 </div>

<div id="tabs-container4" class="formulario">
    <?php echo $this->Form->radio('oscip',$options,$attributes); ?>

    <div id="oscip" style="display: none" >
        
            <div class="cont_2_1_1">

               <div class="gridLayou2">
                <?php echo $form->input('orgao_reconhecedor_oc',array('label' => array('class'=>'formAbas'),'size'=>'40'));?>
               </div>
               <div class="gridLayou1">
                <?php echo $form->input('tipo_documento_oc',array('label' => array('class'=>'formAbas'),'size'=>'20'));?>
               </div>
               <div class="gridLayou1">
                <?php echo $form->input('numero_documento_oc',array('label' => array('class'=>'formAbas'),'size'=>'20'));?>
               </div>
            </div>
        <div class="cont_2_1_1">
            <div class="gridLayou2">
             <?php echo $form->input('orgao_publicacao_oc',array('label' => array('class'=>'formAbas'),'size'=>'40'));?>
            </div>
            <div class="gridLayou1">
             <?php echo $form->input('area_reconhecimento_oc',array('label' => array('class'=>'formAbas'),'size'=>'20'));?>
            </div>
            <div class="gridLayou1">
             <?php echo $form->input('data_publicacao_oc',array('class'=>'data','label' => array('class'=>'formAbas'),'size'=>'20'));?>
            </div>
        </div>

        
    </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>
</div>


<div id="tabs-container5" class="formulario">

    <?php echo $this->Form->radio('os',$options,$attributes); ?>

    <div id="os" style="display: none">
        
        <div class="cont_2_1_1">

           <div class="gridLayou2">
            <?php echo $form->input('orgao_reconhecedor_os',array('label' => array('class'=>'formAbas'),'size'=>'40'));?>
           </div>
           <div class="gridLayou1">
            <?php echo $form->input('tipo_documento_os',array('label' => array('class'=>'formAbas'),'size'=>'20'));?>
           </div>
           <div class="gridLayou1">
            <?php echo $form->input('numero_documento_os',array('label' => array('class'=>'formAbas'),'size'=>'20'));?>
           </div>
        </div>
        <div class="cont_2_1_1">

            <div class="gridLayou2">
             <?php echo $form->input('orgao_publicacao_os',array('label' => array('class'=>'formAbas'),'size'=>'40'));?>
            </div>
            <div class="gridLayou1">
             <?php echo $form->input('area_reconhecimento_os',array('label' => array('class'=>'formAbas'),'size'=>'20'));?>
            </div>
            <div class="gridLayou1">
             <?php echo $form->input('data_publicacao_os',array('class'=>'data','label' => array('class'=>'formAbas'),'size'=>'20'));?>
            </div>
        </div>

        
    </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>
</div>


<div id="tabs-container6" class="formulario">
    
    <a id="addRepresentante" onclick="showAddForm('representante','representantes');">Criar Representante Legal</a>

    <div id="representante">
    </div>

    <div id="representantes">
    </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>

</div>

<div id="tabs-container7" class="formulario">

    <a id="addDirigente" onclick="showAddForm('dirigente','dirigentes');">Criar Outro Dirigente</a>

    <div id="dirigente">
    </div>

    <div id="dirigentes">
    </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>
    
</div>


<div id="tabs-container8" class="formulario">

    <a id="addConselhoFiscal" onclick="showAddForm('conselhoFiscal','conselhos_fiscais');">Criar Conselho Fiscal</a>

    <div id="conselhoFiscal">
    </div>

    <div id="conselhosFiscais">
    </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>

</div>



<div id="tabs-container9" class="formulario">
    
    <a id="addConselhoAdm" onclick="showAddForm('conselhoAdministracao','conselhos_administracao');">Criar Conselho Administração</a>

    <div id="conselhoAdministracao">
    </div>

    <div id="conselhosAdministracao">
    </div>
    <div class="cont_4"><br style="clear:both" />
        <div class="gridLayou4" style="">
            <input type="button" class="botaoAba" onclick="" value="Seguinte"/>
        </div>
    </div>
    
</div>

    
</div>
<div class="cont_4"><br style="clear:both" />

    <div class="gridLayou4" style="">
        <input class="botaoAba" type="submit" value="Salvar Pessoa Juridica">
    </div>
</div>
    


