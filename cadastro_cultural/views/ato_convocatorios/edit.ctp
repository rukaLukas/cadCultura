<h2>Ato Convocatório - Editar</h2>

<?php echo $html->script('jquery-1.3.2.min.js'); ?>
<?php echo $html->script('jquery-ui-1.7.3.custom.min.js'); ?>
<?php echo $html->script('jquery.maskedinput-1.3.js'); ?>
<?php echo $html->script('ato_convocatorio.js'); ?>
<?php echo $html->css('ui-lightness/jquery-ui-1.7.3.custom.css'); ?>

<script type="text/javascript">
	datepicker();
</script>

<?php

echo $this->Form->create('AtoConvocatorio',array('action' => 'edit', 'enctype' => 'multipart/form-data','onSubmit' => '', 'inputDefaults' => array('error' => array('wrap'  => 'span', 'class' => 'help-inline'), 'div' => array('class' => 'control-group'))));

echo $this->element('campos_ato_convocatorio',array('disabled' => false));
 
echo $this->element('datas_ato_convocatorio',array('disabled' => 'false', 'novos_prazos' => false));

echo $this->Form->end('Editar Ato Convocatorio');

?>