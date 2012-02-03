<?php
class ContatoPf extends AppModel {
	var $name = 'ContatoPf';
	var $displayField = 'id';
	var $validate = array(
		'telefone_pf_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Sua mensagem de validação aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
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
		'TelefonePf' => array(
			'className' => 'TelefonePf',
			'foreignKey' => 'telefone_pf_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>