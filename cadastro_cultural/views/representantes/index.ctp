
<table>

    <tr>

        <th>nome</th>
        <th>Rg</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Opções</th>
        </tr>

        <?php $index=0;?>
        <?php foreach ($representantes as $representante): ?>
        <?php $nome = $representante['Representante']['nome'];
              $cpf = $representante['Representante']['cpf'];
              $rg = $representante['Representante']['rg'];
              $data_expedicao = $representante['Representante']['data_expedicao'];
              $orgao_expedidor = $representante['Representante']['orgao_expedidor'];
              $cargo = $representante['Representante']['cargo'];
              $telefone = $representante['Representante']['telefone'];


              $celular = $representante['Representante']['celular'];
              $email = $representante['Representante']['email'];
              $data_inicio_representacao = $representante['Representante']['data_inicio_representacao'];
              $data_fim_representacao = $representante['Representante']['data_fim_representacao'];
        ?>
        
            <tr>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][nome]' value='". $nome ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][cpf]' value='". $cpf ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][rg]' value='". $rg ."'/>";?>

                <?php echo "<input type='hidden' name='data[Representante][".$index. "][data_expedicao]' value='". $data_expedicao ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][orgao_expedidor]' value='". $orgao_expedidor ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][cargo]' value='". $cargo ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][telefone]' value='". $telefone ."'/>";?>

                <?php echo "<input type='hidden' name='data[Representante][".$index. "][celular]' value='". $celular ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][email]' value='". $email ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][data_inicio_representacao]' value='". $data_inicio_representacao ."'/>";?>
                <?php echo "<input type='hidden' name='data[Representante][".$index. "][data_fim_representacao]' value='". $data_fim_representacao ."'/>";?>
                
                
                
                <td>
                    <?php echo $representante['Representante']['nome']?>
                </td>'
                <td>
                    <?php echo $representante['Representante']['rg']?>
                </td>
                <td>
                    <?php echo $representante['Representante']['telefone']?>
                </td>
                <td>
                    <?php echo $representante['Representante']['email']?>
                </td>
                <td>
                   <a  onclick="editarItem(<?php echo $index ?>,'representantes','#representante');">Editar</a>
                   <a  onclick="excluirItem(<?php echo $index ?>,'representantes','#representantes');">Excluir</a>
                </td>
                
            </tr>
            <?php $index++;?>
        <?php endforeach; ?>
  </table>