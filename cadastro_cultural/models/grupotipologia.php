<?php
class Grupotipologia extends AppModel {
	var $name = 'Grupotipologia';
	var $displayField = 'nome';
	var $validate = array(		
		'nome' => array(
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
	/*
	var $belongsTo = array(
		'Segmentocultural' => array(
			'className' => 'Segmentocultural',
			'foreignKey' => 'segmentocultural_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	*/
	var $hasMany = array(
		'Tipologia' => array(
			'className' => 'Tipologia',
			'foreignKey' => 'grupotipologia_id',
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
	
	
	//recupera id do grupotipologia se existir
	function grupoTipologiaPf(){
		$idGrupoTipologia = $this->find('first', array('fields' => array('Grupotipologia.id'),
																					  'conditions' => array('Grupotipologia.nome' => 'PF')));
		return $idGrupoTipologia;
	}	

}
?>