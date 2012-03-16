
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
            <?php $nome = $elemento['ConselhoAdministracao']['nome'];
                  $cpf = $elemento['ConselhoAdministracao']['cpf'];
                  $rg = $elemento['ConselhoAdministracao']['rg'];
                  $data_expedicao = $elemento['ConselhoAdministracao']['data_expedicao'];
                  $orgao_expedidor = $elemento['ConselhoAdministracao']['orgao_expedidor'];
                  $data_inicio_mandato = $elemento['ConselhoAdministracao']['data_inicio_mandato'];
                  $data_fim_mandato = $elemento['ConselhoAdministracao']['data_fim_mandato'];
            ?>

                <tr>
                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][nome]' value='". $nome ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][cpf]' value='". $cpf ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][rg]' value='". $rg ."'/>";?>

                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][data_expedicao]' value='". $data_expedicao ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][orgao_expedidor]' value='". $orgao_expedidor ."'/>";?>

                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][data_inicio_mandato]' value='". $data_inicio_mandato ."'/>";?>
                    <?php echo "<input type='hidden' name='data[ConselhoAdministracao][".$index. "][data_fim_mandato]' value='". $data_fim_mandato ."'/>";?>



                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoAdministracao']['nome']?>
                    </td>'
                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoAdministracao']['rg']?>
                    </td>
                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoAdministracao']['data_inicio_mandato']?>
                    </td>
                    <td class="gridTabelaText1">
                        <?php echo $elemento['ConselhoAdministracao']['data_fim_mandato']?>
                    </td>
                    <td class="gridTabelaText1" style="text-align: center;">
                       <a  onclick="editarItem(<?php echo $index ?>,'conselhos_administracao','#conselhoAdministracao');"><img src="../img/edit_16x16.png" width="16" height="16" alt="EDITAR" /></a>
                       <a  onclick="excluirItem(<?php echo $index ?>,'conselhos_administracao','#conselhosAdministracao');"><img src="../img/round_remove_16x16.png" width="16" height="16" alt="DELETAR" /></a>
                    </td>

                </tr>
                <?php $index++;?>
            <?php endforeach; ?>
      </table>
    </div>
</div>