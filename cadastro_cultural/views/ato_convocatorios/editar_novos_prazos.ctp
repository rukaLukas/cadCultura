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
echo $javascript->link('prototype', false);
echo $this->Form->create('AtoConvocatorio',array('action' => 'edit'));

echo $this->element('campos_ato_convocatorio',array('disabled' => true));

echo $this->element('datas_ato_convocatorio', array('disabled' => 'disabled','novos_prazos' => true));


echo $this->Form->end('Editar Ato Convocatorio');

?>