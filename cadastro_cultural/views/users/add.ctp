<h1>Adicionar Usuário</h1>

<?php

    echo $form->create('User');
    echo $form->inputs(array(    'legend' => __('Login', true),    'username',    'password'));
    echo $form->select('group_id', $grupos);
    echo $form->end('Salvar Grupo');



 ?>