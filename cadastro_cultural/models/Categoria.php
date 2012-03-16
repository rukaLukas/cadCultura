<?php
	class Categoria extends AppModel {
		var $name = 'Categoria';
		var $hasAndBelongsToMany = array('AtoConvocatorio'=>array('className'=>'AtoConvocatorio'));
	}

?>