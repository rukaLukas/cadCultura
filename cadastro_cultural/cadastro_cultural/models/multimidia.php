<?php
class Multimidia extends AppModel {
	var $name = 'Multimidia';
	var $displayField = 'curriculo_id';
	var $validate = array(
		'multimidia' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Sua mensagem de validação aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
	);
	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

	var $belongsTo = array(
		'Curriculo' => array(
			'className' => 'Curriculo',
			'foreignKey' => 'curriculo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>