<h1>Adicionar Group</h1>

<?php

    echo $form->create('Group',array('inputDefaults' => array('error' => array('wrap'  => 'span', 'class' => 'help-inline'), 'div' => array('class' => 'control-group'))));
    echo $form->input('name');
    echo $form->end('Salvar Grupo');


 ?>