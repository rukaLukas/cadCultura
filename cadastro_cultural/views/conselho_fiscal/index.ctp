<div class="cont_4">
    <div class="gridLayou4">

    <table width="95%" border="1" cellspacing="0" cellpadding="0" class="gridTabela">
        <tr>
            <td width="19%" class="gridTabelaTitulo">Nome</td>
            <td width="19%" class="gridTabelaTitulo">Rg</td>
            <td width="23%" class="gridTabelaTitulo">Data Inicio Mandato</td>
            <td width="23%" class="gridTabelaTitulo">Data Fim Mandato</td>
            <td width="16%" class="gridTabelaTitulo">Opcoes</td>
        </tr>

            <?php $index=0;?>
            <?php foreach ($elementos as $elemento): ?>
            <?php $nome = $elemento['ConselhoFiscal']['nome'];
                  $cpf = $elemento['ConselhoFiscal']['cpf'];
                  $rg = $elemento['ConselhoFiscal']['rg'];
                  $data_expedicao = $elemento['ConselhoFiscal']['data_expedicao'];
                  $orgao_expedidor = $elemento['ConselhoFiscal']['orgao_expedidor'];
                  $data_inicio_mandato = $elemento['ConselhoFiscal']['data_inicio_mandato'];
                  $data_fim_mandato = $elemento['ConselhoFiscal']['data_fim_mandato'];
            ?>

                <tr>
                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][nome]' value='". $nome ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][cpf]' value='". $cpf ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][rg]' value='". $rg ."'/>";?>

                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][data_expedicao]' value='". $data_expedicao ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][orgao_expedidor]' value='". $orgao_expedidor ."'/>";?>

                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][data_inicio_mandato]' value='". $data_inicio_mandato ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoFiscal][".$index. "][data_fim_mandato]' value='". $data_fim_mandato ."'/>";?>



                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoFiscal']['nome']?>
                    </td>'
                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoFiscal']['rg']?>
                    </td>
                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoFiscal']['data_inicio_mandato']?>
                    </td>
                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoFiscal']['data_fim_mandato']?>
                    </td>
                    <td class="gridTabelaText1" style="text-align: center;">
                       <a  onclick="editarItem(<?php echo $index ?>,'conselhos_fiscais','#conselhoFiscal');"><img src="../img/edit_16x16.png" width="16" height="16" alt="EDITAR" /></a>
                       <a  onclick="excluirItem(<?php echo $index ?>,'conselhos_fiscais','#conselhosFiscais');"><img src="../img/round_remove_16x16.png" width="16" height="16" alt="DELETAR" /></a>
                    </td>

                </tr>
                <?php $index++;?>
            <?php endforeach; ?>
      </table>
    </div>
</div>