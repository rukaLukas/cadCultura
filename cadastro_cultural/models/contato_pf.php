<?php
class ContatoPf extends AppModel {
	var $name = 'ContatoPf';
	var $displayField = 'id';
	var $validate = array(
		'pf_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Pf' => array(
			'className' => 'Pf',
			'foreignKey' => 'pf_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>