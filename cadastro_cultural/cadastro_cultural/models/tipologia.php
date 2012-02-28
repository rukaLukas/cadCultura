<?php
class Tipologia extends AppModel {
	var $name = 'Tipologia';
	var $displayField = 'id';
	var $validate = array(
		'grupotipologia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'segmentocultural_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Grupotipologia' => array(
			'className' => 'Grupotipologia',
			'foreignKey' => 'grupotipologia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Segmentocultural' => array(
			'className' => 'Segmentocultural',
			'foreignKey' => 'segmentocultural_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cnae' => array(
			'className' => 'Cnae',
			'foreignKey' => 'cnae_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cbo' => array(
			'className' => 'Cbo',
			'foreignKey' => 'cbo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Elo' => array(
			'className' => 'Elo',
			'foreignKey' => 'elo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Pf' => array(
			'className' => 'Pf',
			'foreignKey' => 'tipologia_id',
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