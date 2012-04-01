<?php
class Pf extends AppModel {
	var $name = 'Pf';
	var $displayField = 'nome_artistico';	
	var $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o nome',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'nome_artistico' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o nome artístico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'data_nascimento' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Data inválida',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'sexo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o sexo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'cpf' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o CPF',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),			
			/*
			'cpfDuplicado' => array(			
				'rule' => array('cpfDuplicado'),
				'message' => 'esse CPF já está cadastrado',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations		
			)
			*/			
		),
		'rg' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o RG',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'profissao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe a profissão',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'logradouro' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o Logradouro',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'numero' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Informe o número',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),		
		'bairro' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o bairro',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'cep' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o CEP',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),		
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Informe o email',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'telefone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o telefone',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
		'site' => array(
			'website' => array(
				'rule' => array('url'),
				'message' => 'Informe um endereço de site correto',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),							
	);
	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

	var $belongsTo = array(
		'Nacionalidade' => array(
			'className' => 'Nacionalidade',
			'foreignKey' => 'nacionalidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),		
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		/*
		'Escolaridade' => array(
			'className' => 'Escolaridade',
			'foreignKey' => 'escolaridade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipologia' => array(
			'className' => 'Tipologia',
			'foreignKey' => 'tipologia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Visto' => array(
			'className' => 'Visto',
			'foreignKey' => 'visto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		*/
	);

	
	
	var $hasMany = array(			
		'ContatoPf' => array(
			'className' => 'ContatoPf',
			'foreignKey' => 'pf_id',
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
		'Graduacao' => array(
			'className' => 'Graduacao',
			'foreignKey' => 'pf_id',
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
	
	
	
	function cpfDuplicado(){
		$cpf = $this->data['Pf']['cpf'];
		$total = $this->find('count', array('conditions' => array('Pf.cpf' => $cpf)));				
		
		if($total > 0)
			return false;	
		else 
			return true;			
	}
	
	
	 /*
	 * define padrões de busca com o plugin cakeDC search
	 */
    public $filterArgs = array(	    
    	array('name' => 'nome', 'type' => 'UPPER(like)', 'field' => 'UPPER(Pf.nome)'),
    	array('name' => 'cpf', 'type' => 'value'),
    	array('name' => 'user_id', 'type' => 'int') 	
    );
	
}
?>