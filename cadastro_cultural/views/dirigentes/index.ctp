<div class="cont_4">
	      <div class="gridLayou4">
                  
<table width="95%" border="1" cellspacing="0" cellpadding="0" class="gridTabela">
    
        <tr>
            <td width="19%" class="gridTabelaTitulo">Nome</td>
            <td width="19%" class="gridTabelaTitulo">Rg</td>
            <td width="23%" class="gridTabelaTitulo">Telefone</td>
            <td width="23%" class="gridTabelaTitulo">Email</td>
            <td width="16%" class="gridTabelaTitulo">Opcoes</td>
        </tr>

        <?php $index=0;?>
        <?php foreach ($representantes as $representante): ?>
        <?php $nome = $representante['Dirigente']['nome'];
              $cpf = $representante['Dirigente']['cpf'];
              $rg = $representante['Dirigente']['rg'];
              $data_expedicao = $representante['Dirigente']['data_expedicao'];
              $orgao_expedidor = $representante['Dirigente']['orgao_expedidor'];
              $cargo = $representante['Dirigente']['cargo'];
              $telefone = $representante['Dirigente']['telefone'];


              $celular = $representante['Dirigente']['celular'];
              $email = $representante['Dirigente']['email'];
              $data_inicio_mandato = $representante['Dirigente']['data_inicio_mandato'];
              $data_fim_mandato = $representante['Dirigente']['data_fim_mandato'];
        ?>
        
            <tr>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][nome]' value='". $nome ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][cpf]' value='". $cpf ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][rg]' value='". $rg ."'/>";?>

                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][data_expedicao]' value='". $data_expedicao ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][orgao_expedidor]' value='". $orgao_expedidor ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][cargo]' value='". $cargo ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][telefone]' value='". $telefone ."'/>";?>

                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][celular]' value='". $celular ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][email]' value='". $email ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][data_inicio_mandato]' value='". $data_inicio_mandato ."'/>";?>
                <?php echo "<input type='hidden' name='data[Dirigente][".$index. "][data_fim_mandato]' value='". $data_fim_mandato ."'/>";?>
                
                
                
                <td class="gridTabelaText1">
                    <?php echo $representante['Dirigente']['nome']?>
                </td>
                <td class="gridTabelaText1">
                    <?php echo $representante['Dirigente']['rg']?>
                </td>
                <td class="gridTabelaText1">
                    <?php echo $representante['Dirigente']['telefone']?>
                </td>
                <td class="gridTabelaText1">
                    <?php echo $representante['Dirigente']['email']?>
                </td>
                <td class="gridTabelaText1" style="text-align: center;">
                   <a  onclick="editarItem(<?php echo $index ?>,'dirigentes','#dirigente');"><img src="../img/edit_16x16.png" width="16" height="16" alt="EDITAR" /></a>
                   <a  onclick="excluirItem(<?php echo $index ?>,'dirigentes','#dirigentes');"><img src="../img/round_remove_16x16.png" width="16" height="16" alt="DELETAR" /></a>
                </td>
                
            </tr>
            <?php $index++;?>
        <?php endforeach; ?>
  </table>
    </div>
</div>