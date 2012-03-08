<?php
class Elo extends AppModel {
	var $name = 'Elo';
	var $displayField = 'nomelo';
	var $validate = array(
		'nomelo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o nome do elo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'eloDuplicado' => array(
				'rule' => array('eloDuplicado'),
				'message' => 'Já existe um elo cadastrado com esse nome',
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
			'foreignKey' => 'elo_id',
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
	
	
	function eloDuplicado(){
		$elo = strtoupper($this->data['Elo']['nomelo']);
		$total = $this->find('count', array('conditions' => array('Elo.nomelo' => $elo)));				
		
		if($total > 0)
			return false;	
		else 
			return true;			
	}
	
	
	function beforeSave(){
		$this->data['Elo']['nomelo'] = strtoupper($this->data['Elo']['nomelo']);
		
		return true;
	}

}
?>