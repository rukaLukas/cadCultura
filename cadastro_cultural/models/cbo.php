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
			'codCboDuplicado' => array(			
				'rule' => array('codCboDuplicado'),
				'message' => 'Já Existe um cbo cadastrado com esse código',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations		
			)
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
			'cboDuplicado' => array(			
				'rule' => array('cboDuplicado'),
				'message' => 'Já Existe um cbo cadastrado com esse nome',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations		
			)
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
	
	
	function cboDuplicado(){
		$nomeCbo = strtoupper($this->data['Cbo']['nomcbo']);
		$total = $this->find('count', array('conditions' => array('Cbo.nomcbo' => $nomeCbo)));			
		
		if($total > 0)
			return false;
		else
			return true;			
		
	}
	
	function codCboDuplicado(){
		$codCbo = $this->data['Cbo']['codcbo'];
		$total = $this->find('count', array('conditions' => array('Cbo.codcbo' => $codCbo)));				
		
		if($total > 0)
			return false;	
		else 
			return true;	
		
	}
	
	function beforeSave(){
		$this->data['Cbo']['nomcbo'] = strtoupper($this->data['Cbo']['nomcbo']);
		
		return true;
	}
	
	function afterSave(){
		$this->data['Tipologia']['identificador'] = 'PF';//identificador para model tipologia fazer a busca pelo tipo correto
		$this->data['Tipologia']['cbo_id'] = $this->id;
		$this->data['Tipologia']['segmentocultural_id'] = $this->data['Cbo']['segmentocultural_id'];
		$this->Tipologia->save($this->data);
	}
	
}
?>