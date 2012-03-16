<?php
	class AtoConvocatorio extends AppModel {
		
		public $name = 'AtoConvocatorio';
		var $belongsTo = 'TipoAtoConvocatorio,TipoRegiao, Regiao, Localidade, UnidadeExecutora,Estado,Pais,Cidade';      
		var $hasAndBelongsToMany = array('Categoria'=>array('className'=>'Categoria'));
		var $hasMany = array
	    (
	        'Historico' => array
	        (
	            'className' => 'AtoConvocatorio',
	            'foreignKey' => 'ato_convocatorio_id'
	        )
	    );
		
		public function publicar($id)
		{
			$this->read(null, $id);
			return $this->saveField('estado', 'Publicado');
		}
		
		public function publicado()
		{
			return 'Publicado' == $this->field('estado');
		}
		
		public function ativo()
		{
			return 'Ativo' == $this->field('estado');
		}
		
		public function inativar($id)
		{
			$this->read(null, $id);
			return $this->saveField('estado', 'Inativo');
		}
		
		public function compareDates($field,$data1,$data2) 
		{ 		
				if(!empty($this->data[$this->alias][$data1]) && !empty($this->data[$this->alias][$data1])){
					return strtotime($this->data[$this->alias][$data1]) <= strtotime($this->data[$this->alias][$data2]); 
				}
		        return true;
		}
		
		public $validate = array(
	        'tipo_ato_convocatorio_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'numero' => array(
				'numeric' => array(
					'rule' => 'Numeric',
					'required' => true,
					'message' => 'Somente número são permitidos.'	
				),
				'notempty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'	
				)
	            
	        ),
			'ano' => array(
            	'numeric' => array(
					'rule' => 'Numeric',
					'required' => true,
					'message' => 'Somente número são permitidos.'	
				),
				'notempty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'	
				),
				'between' => array(
					'rule' => array('between',4,4),
					'message' => 'Apenas anos com formato completo são permitidos. Ex: (2012)'
				)
	        ),
			'titulo' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'pais_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'estado_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'cidade_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'territorio_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'localidade_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'unidade_executora_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_inicio_apresentacao' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_fim_apresentacao' => array(
				'notEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'
				),
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_apresentacao", "data_fim_apresentacao") ,
					'message' => 'Data Fim da Apresentação deve ser maior que a Data Início da Apresentação.'
				)
	            
	        ),
			'novo_prazo_fim_apresentacao' => array(
				'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_apresentacao", "novo_prazo_fim_apresentacao"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_inicio_analise' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_fim_analise' => array(
	            'notEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'
				),
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_analise", "data_fim_analise") ,
					'message' => 'Data Fim da Análise deve ser maior que a Data Início da Análise.'
				)
	        ),
			'novo_prazo_fim_analise' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_analise", "novo_prazo_fim_analise"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_fim_diligencias_analise' => array(
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_diligencias_analise", "data_fim_diligencias_analise"),
					'message' => 'Data Fim das Diligencias da Análise deve ser maior que a Data Início das Diligencias da Análise.',
					'allowEmpty' => true,
					'required' => false
				)
			),
			'novo_prazo_fim_diligencias_analise' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_diligencias_analise", "novo_prazo_fim_diligencias_analise"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_prevista_publicao_inscritas' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_real_publicacao_inscritas' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_prevista_publicao_inscritas", "data_real_publicacao_inscritas"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_inicio_selecao' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_fim_selecao' => array(
	            'notEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'
				),
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_selecao", "data_fim_selecao") ,
					'message' => 'Data Início da Seleção deve ser maior que a Data Fim da Seleção.'
				)
	        ),
			'novo_prazo_fim_selecao' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_selecao", "novo_prazo_fim_selecao"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_fim_diligencias_selecao' => array(
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_diligencias_selecao", "data_fim_diligencias_selecao"),
					'message' => 'Data Fim das Diligencias da Seleção deve ser maior que a Data Início das Diligencias da Seleção.',
					'allowEmpty' => true,
					'required' => false
				)
			),
			'novo_prazo_fim_diligencias_selecao' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_diligencias_selecao", "novo_prazo_fim_diligencias_selecao"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_prevista_publicacao_selecionadas' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_real_publicacao_selecionadas' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_prevista_publicacao_selecionadas", "data_real_publicacao_selecionadas"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_inicio_recurso' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_fim_recurso' => array(
	            'notEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'
				),
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_recurso", "data_fim_recurso") ,
					'message' => 'Data Início do Recurso deve ser maior que a Data Fim do Recurso.'
				)
	        ),
			'novo_prazo_fim_recurso' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_recurso", "novo_prazo_fim_recurso"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_prevista_publicacao_resultados' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_real_publicacao_resultados' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_prevista_publicacao_resultados", "data_real_publicacao_resultados"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),	
			'data_inicio_entrega_documentos' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_fim_entrega_documentos' => array(
	            'notEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'
				),
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_entrega_documentos", "data_fim_entrega_documentos") ,
					'message' => 'Data Início da Entrega dos Documentos deve ser maior que a Data Fim da Entrega dos Documentos.'
				)
	        ),
			'novo_prazo_entrega_documentos' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_entrega_documentos", "novo_prazo_entrega_documentos"),
					'message' => 'Novo prazo deve ser maior que a data fim.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_prevista_celebracao' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_real_celebracao' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_prevista_celebracao", "data_real_celebracao"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_prevista_publicacao' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_real_publicacao' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_prevista_celebracao", "data_real_publicacao"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_prevista_limite_tce' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_real_limite_tce' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_prevista_limite_tce", "data_real_limite_tce"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_inicio_prazo_selecao' => array(
	            'rule' => 'notEmpty',
				'message' => 'Campo de preenchimento obrigatório.'
	        ),
			'data_fim_prazo_selecao' => array(
				'notEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório.'
				),
				'maior_data_inicio' => array(
					'rule' => array('compareDates', "data_inicio_prazo_selecao", "data_fim_prazo_selecao") ,
					'message' => 'Data Fim do Prazo de Seleção deve ser maior que a Data Início do prazo de Seleção.'
				)
	            
	        ),
			'data_real_inicio_prazo_selecao' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_inicio_prazo_selecao", "data_real_inicio_prazo_selecao"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        ),
			'data_real_fim_prazo_selecao' => array(
	            'maior_data_fim' => array(
					'rule' => array('compareDates', "data_fim_prazo_selecao", "data_real_fim_prazo_selecao"),
					'message' => 'Data real deve ser maior que a data prevista.',
					'allowEmpty' => true,
					'required' => false,
				)
	        )
	
	    );
	}

?>