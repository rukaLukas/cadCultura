<h1>Usuarios </h1>
<?php echo $html->link('Adicionar Usuario',array('controller' => 'users', 'action' => 'add'))?>
<table>

    <tr>
        <th>Id</th>
        <th>Nome</th>
       
        </tr>


        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $user['AroAco']['id']; ?>
                </td>
               
               
                <td>
                    <?php echo $user['AroAco']['aco_id']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
  </table>