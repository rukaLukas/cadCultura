<?php
class Tipologia extends AppModel {
	var $name = 'Tipologia';
	var $displayField = 'id';

	
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
		'Atividade' => array(
			'className' => 'Atividade',
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
		),
		'PfsTipologia' => array(
			'className' => 'PfsTipologia',
			'foreignKey' => 'tipologia_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

	/*
	 * procura por um padrão de tipologia completo(elo)
	 * se ecnontra retorna o nome do elo
	 */  
	function padraoElo($grupoTipologiaId,$grupoTipologia,$segmentoCulturalId,$atividade,$elo){
		$total = $this->find('count', array('conditions' => array('Tipologia.grupotipologia_id' => $grupoTipologiaId,
																  'Tipologia.segmentocultural_id' => $segmentoCulturalId,
																  'Tipologia.cbo_id' => $atividade,
																  'Tipologia.elo_id' => $elo)));
		if($total > 0){
			$eloNome = $this->Elo->find('first', array('fields' => array('Elo.id','Elo.nomelo'),
									   				   'conditions' => array('Elo.id' => $elo)
											           )
										);
							
			return $eloNome;											
		}		
	}
	
	/*
	 * procura por um padrão de tipologia sem elo correspondente ao '$this->data' atual
	 * se encontrar atualiza passando o elo, caso contrario adiciona um novo registro 
	 */
	function saveElo($data){				
	$procura = $this->find('first', array('fields' => array('Tipologia.id'),
											  'conditions' => array('Tipologia.segmentocultural_id' => $data['Tipologia']['segmentocultural_id'],
																	'Tipologia.grupotipologia_id' => $data['Tipologia']['grupotipologia_id'],
																	'Tipologia.cbo_id' => $data['Tipologia']['cbo_id'],
																	'Tipologia.elo_id' => NULL)));
		/*
		 * encontrou correspondencia do padrão de tipologia sem elo, então atualiza registro passandoo valor do elo
		 */		
		if(!empty($procura)){
			$id = $procura['Tipologia']['id'];			
			$data['Tipologia']['id'] = $id;
			if($this->save($data))
				return true;
		}
		else{
			if($this->save($data))
				return true;
		}
		
	}
	/*
	function afterSave(){
		echo "akiii<br>";
	}
	*/
	
	function beforeSave(){
	
		/*
		if($this->data['Tipologia']['identificador'] == "elo"){						
	
			if($this->data['Tipologia']['tipoGrupo'] == "PF"){
				
				$this->data['Tipologia']['segmentocultural_id'] = $segmentoCulturalId;			
				$this->data['Tipologia']['grupotipologia_id'] = $grupotipologia;			
				$this->data['Tipologia']['cbo_id'] = $atividade;
				$this->data['Tipologia']['elo_id'] = $eloId;

				return true;
			}
	
		}
		*/
		if($this->data['Tipologia']['identificador'] == 'PF'){
			$cboId = $this->data['Tipologia']['cbo_id'];
			$segmentoCulturalId = $this->data['Tipologia']['segmentocultural_id'];		
			$identificador = $this->data['Tipologia']['identificador']; //identificador para model tipologia fazer a busca pelo tipo correto
			$grupoTipologia = $this->Grupotipologia->find('first', array('fields' => 'Grupotipologia.id',
																					'conditions' => array('Grupotipologia.nome' => $identificador)));
			$grupoTipologiaId = $grupoTipologia['Grupotipologia']['id'];		
			$total = $this->find('count', array('conditions' => array('Tipologia.grupotipologia_id' => $grupoTipologiaId,
																					  'Tipologia.segmentocultural_id' => $segmentoCulturalId,
																					  'Tipologia.cbo_id' => $cboId)));
			$this->data['Tipologia']['grupotipologia_id'] = $grupoTipologiaId;
			
			unset($this->data['Tipologia']['identificador']);//retira do array o indice 'identificador'		
			
			if($total > 0)
				return false;
			else
				return true;				
		}	
	}

	// recupera id da tipologia que tenha o padrão(segmentocultural,cbo,elo,grupotipologia) corrente
	function idTipologia($segmentoCultural,$cbo,$elo,$grupoTipologia){
		
		$idTipologia = $this->find('first', array('fields' => array('Tipologia.id','Tipologia.elo_id'), 
									'conditions' => array("Tipologia.segmentocultural_id = ".$segmentoCultural."", 
														  "Tipologia.cbo_id = ".$cbo."",
														  "Tipologia.elo_id = ".$elo."",
														  "Tipologia.grupotipologia_id = ".$grupoTipologia.""
														  )
								   )
				    );
	
		return $idTipologia;	
	}	
}
?>