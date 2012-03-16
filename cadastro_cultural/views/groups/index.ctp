<h1>Grupos </h1>
<?php echo $html->link('Adicionar Grupo',array('controller' => 'groups', 'action' => 'add'))?>
<table cellspacing="5" cellpadding="5" class="table table-striped table-bordered table-condensed">

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ação</th>
        <th>Criado em</th>
        </tr>


        <?php foreach ($groups as $group): ?>
            <tr>
                <td>
                    <?php echo $group['Group']['id']; ?>
                </td>
                <td>
                    <?php echo $html->link($group['Group']['name'], "/groups/view/".$group['Group']['id']); ?>
                </td>
                <td>
                    <?php echo $html->link('Excluir', array('action' => 'delete', $group['Group']['id']), null, 'Deseja realmente excluir?' )?>
                    <?php echo $html->link('Editar', array('action'=>'edit', $group['Group']['id']));?>
                </td>
                <td>
                    <?php echo $group['Group']['created']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
  </table>