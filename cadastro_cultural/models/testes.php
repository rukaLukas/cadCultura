<?php
class Teste extends AppModel {
	var $name = 'Teste';
	var $displayField = 'id';
	var $validate = array(
		'contato_id' => array(
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
		'Contato' => array(
			'className' => 'Contato',
			'foreignKey' => 'contato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>