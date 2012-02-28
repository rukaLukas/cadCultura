<?php
class TelefonePf extends AppModel {
	var $name = 'TelefonePf';
	var $useTable = 'telefone_pfs';
	var $displayField = 'telefone';
	var $validate = array(
		'telefone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Sua mensagem de validação aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
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