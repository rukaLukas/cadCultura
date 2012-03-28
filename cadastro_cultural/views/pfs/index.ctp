<div class="pfs index">

	<div id="breadcrumb">
        <ul>
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Inscrições</a></li>
          <li>Pessoa Física</li>
        </ul>
      </div>
	<div class="abaConteudo" style="visibility:visible; display:block">	
		<h2><?php __('Pessoas Física');?></h2>
		<div class="formulario">
		<?php echo $this->Form->create('Pf', array('action' => 'find', $this->params['pass']));?>
            <div class="formularioDestaque">
              <table width="98%" style="margin:0 auto;">
                <tbody><tr>
                  <td class="celula2" colspan="3"><!--<label for="lblNome">Nome Completo</label>-->
                    <br>
                    <?php echo $form->input('nome', array('label' => 'Nome Completo:', 'style' => 'width:400px; margin-right:60px')); ?>
                    <!--<input type="text" size="90" id="txtImg" name="Img">-->
                    </td>
                  <td class="celula1" colspan="3"><!--<label for="lblRsocial">CPF</label>-->
                    <br>
                    <?php echo $form->input('cpf', array('label' => 'CPF:', 'style' => 'width:200px;')); ?>
                    <!--<input type="text" size="25" id="txtRsocial" name="Rsocial">--></td>
                </tr>
              </tbody></table>
              <div class="alinhaBotao">              	
                <!--<input type="submit" style="margin-right:15px;" class="botaoForm" value="Localizar">-->
                <?php echo $form->button('Localizar', array('class' => 'botaoForm', 'type'=>'submit')); ?>                
              </div>
            </div>            
            <?php echo $this->Html->link('Cadastrar Pessoa Física', array('action' => 'add'), array('class' => 'botaoForm')); ?>
          </div>		
		
		<fieldset class="fieldset">		 
          <legend class="legend">Resultado da Pesquisa</legend>
          <table style="margin:0 auto;" class="resultado" width="100%">
            <thead>
              <tr class="linazul">
                <td class="column1"></td>
                <th scope="col" class="colum2">Nome Completo</th>
                <th scope="col">CPF</th>
              </tr>
            </thead>
            <tbody>
            <?php
				$i = 0;
				foreach ($pfs as $pf):
					$class = ' class="linazul"';
					if ($i++ % 2 == 0) {
						$class = ' class="linbranca"';
					}
			?>
			<tr<?php echo $class;?>>
			<th scope="row" class="colum1">
			<?php			
				echo $this->Html->link(
								$this->Html->image('../icones/edit_16x16.png', array('alt'=> 'Editar', 'title' => 'Editar', 'border' => '0', 'height' => '15')),
								array('action' => 'edit', $pf['Pf']['id']),
								array('escape' => false)
							);
				$delete_img = $this->Html->image('../icones/trash_16x16.png', array('alt'=> 'Excluir', 'title' => 'Excluir', 'border' => '0', 'height' => '15'));							
				echo $this->Html->link($delete_img, array('action' => 'delete', $pf['Pf']['id']), array('escape' => false), sprintf(__('Você tem certeza que deseja excluir a pessoa física - %s?', true), $pf['Pf']['nome']));				
				?>				
				</th>
                <td><?php echo $pf['Pf']['nome']; ?>&nbsp;</td>
                <td><?php echo $pf['Pf']['cpf']; ?>&nbsp;</td>
             </tr>
            <?php endforeach; ?>            
            </tbody>
          </table>
        </fieldset>
        			
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%', true)
		));
		?>	</p>
	
		<div class="paging">
			<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
		 | 	<?php echo $this->Paginator->numbers();?>
	 |
			<?php echo $this->Paginator->next(__('próxima', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
	</div>	
</div>