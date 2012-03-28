<?php
	class Estado extends AppModel {
		var $name = 'Estado';
		var $displayField = 'nome';
		var $belongsTo = 'Pais';
		var $hasMany = array( 
			'Cidade' => array(
				'dependent' => true 
			) 
		);
	}

?>