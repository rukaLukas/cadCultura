<h1><?php echo $pessoaJuridica['PessoaJuridica']['razao_social']?></h1>

<p><small>Fundado em: <?php echo $pessoaJuridica['PessoaJuridica']['data_fundacao']?></small></p>

 
<br>
<div>Portifolios</div>
<table>

    <tr>

        <th>Mes</th>
        <th>Ano</th>
        <th>Funcao</th>
        <th>Empresa</th>

        </tr>


        <?php foreach ($pessoaJuridica['Portifolio'] as $portifolio): ?>
            <tr>

                <td>
                    <?php echo $portifolio['mes']?>
                </td>
                <td>
                    <?php echo $portifolio['ano']?>
                </td>
                <td>
                    <?php echo $portifolio['funcao']?>
                </td>
                <td>
                    <?php echo $portifolio['empresa']?>
                </td>

            </tr>
        <?php endforeach; ?>
  </table>



