<?php
class Contato extends AppModel {
	var $name = 'Contato';
	var $displayField = 'id';
	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

	var $hasMany = array(
		'Teste' => array(
			'className' => 'Teste',
			'foreignKey' => 'contato_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>