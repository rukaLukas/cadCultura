<?php
class Cbo extends AppModel {
	var $name = 'Cbo';
	var $displayField = 'nomcbo';
	var $validate = array(
		'codcbo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nomcbo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tipologia' => array(
			'className' => 'Tipologia',
			'foreignKey' => 'cbo_id',
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

	var $belongsTo = array(
		'Segmentocultural' => array(
			'className' => 'Segmentocultural',
			'foreignKey' => 'segmentocultural_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
?>