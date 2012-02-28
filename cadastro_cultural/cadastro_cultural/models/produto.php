<?php
class Produto extends AppModel {
	var $name = 'Produto';
	var $displayField = 'descricao';
	var $validate = array(
		'descricao' => array(
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

	var $hasAndBelongsToMany = array(
		'Curriculo' => array(
			'className' => 'Curriculo',
			'joinTable' => 'curriculos_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'curriculo_id',
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