<h1>Usuarios </h1>
<?php echo $html->link('Adicionar Usuario',array('controller' => 'users', 'action' => 'add'))?>
<table>

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ação</th>
        <th>Criado em</th>
        </tr>


        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $user['User']['id']; ?>
                </td>
                <td>
                    <?php echo $html->link($user['User']['username'], "/users/view/".$user['User']['id']); ?>
                </td>
                <td>
                    <?php echo $html->link('Excluir', array('action' => 'delete', $user['User']['id']), null, 'Deseja realmente excluir?' )?>
                    <?php echo $html->link('Editar', array('action'=>'edit', $user['User']['id']));?>
                </td>
                <td>
                    <?php echo $user['User']['created']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
  </table>