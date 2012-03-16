<div class="cont_4">
	      <div class="gridLayou4">
<table width="95%" border="1" cellspacing="0" cellpadding="0" class="gridTabela">

    <tr>
		    <td width="19%" class="gridTabelaTitulo">Mes</td>
		    <td width="19%" class="gridTabelaTitulo">Ano</td>
		    <td width="23%" class="gridTabelaTitulo">Funcao</td>
                    <td width="23%" class="gridTabelaTitulo">Empresa</td>
		    <td width="16%" class="gridTabelaTitulo">Opcoes</td>
    </tr>

    
        <?php $index=0;?>
        <?php foreach ($portifolios as $portifolio): ?>
        <?php $mes = $portifolio['Portifolio']['mes']; 
              $ano = $portifolio['Portifolio']['ano'];
              $descricao_atividade = $portifolio['Portifolio']['descricao_atividade'];
              $funcao = $portifolio['Portifolio']['funcao'];
              $empresa = $portifolio['Portifolio']['empresa'];
              $ato_constituicao = $portifolio['Portifolio']['ato_constituicao'];
              $anexo_ato = $portifolio['Portifolio']['anexo_ato'];
        ?>
        
            <tr>
                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][mes]' value='". $mes ."'/>";?>
                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][ano]' value='". $ano ."'/>";?>
                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][descricao_atividade]' value='". $descricao_atividade ."'/>";?>

                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][funcao]' value='". $funcao ."'/>";?>
                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][empresa]' value='". $empresa ."'/>";?>
                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][ato_constituicao]' value='". $ato_constituicao ."'/>";?>
                <?php echo "<input type='hidden' name='data[Portifolio][".$index. "][anexo_ato]' value='". $anexo_ato ."'/>";?>
                
                
                
                <td class="gridTabelaText1">
                    <?php echo $portifolio['Portifolio']['mes']?>
                </td>
                <td class="gridTabelaText1">
                    <?php echo $portifolio['Portifolio']['ano']?>
                </td>
                <td class="gridTabelaText1">
                    <?php echo $portifolio['Portifolio']['funcao']?>
                </td>
                <td class="gridTabelaText1">
                    <?php echo $portifolio['Portifolio']['empresa']?>
                </td>
                <td class="gridTabelaText1" style="text-align: center;">
                    
                   <?php echo "<a id='deletePortifolio' onclick='editarPortifolio(".$index.");'><img src='../img/edit_16x16.png' width='16' height='16' alt='EDITAR' /></a>" ?>
                   <?php echo "<a id='deletePortifolio' onclick='excluirPortifolio(".$index.");'><img src='../img/round_remove_16x16.png' width='16' height='16' alt=DELETAR' /></a>" ?>
                </td>
                
            </tr>
            <?php $index++;?>
        <?php endforeach; ?>
  </table>
              </div>
</div>