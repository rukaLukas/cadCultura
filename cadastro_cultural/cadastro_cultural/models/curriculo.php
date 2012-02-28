<?php
class Curriculo extends AppModel {
	var $name = 'Curriculo';
	var $displayField = 'descricao';
	var $validate = array(
		'organizacao_responsavel' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Sua mensagem de validação aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),		
		'data' => array(
			'date' => array(
				'rule' => array('date'),
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
		'FuncaoExercida' => array(
			'className' => 'FuncaoExercida',
			'foreignKey' => 'funcao_exercida_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pf' => array(
			'className' => 'Pf',
			'foreignKey' => 'pf_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Multimidia' => array(
			'className' => 'Multimidia',
			'foreignKey' => 'curriculo_id',
			'dependent' => true,
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


	var $hasAndBelongsToMany = array(
		'Produto' => array(
			'className' => 'Produto',
			'joinTable' => 'curriculos_produtos',
			'foreignKey' => 'curriculo_id',
			'associationForeignKey' => 'produto_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>