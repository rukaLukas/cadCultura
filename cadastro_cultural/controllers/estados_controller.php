<?php
	class EstadosController extends AppController
	{
		var $name = 'Estados';
		var $helpers = array('Form', 'Html', 'Javascript', 'Ajax');
		var $components = array('RequestHandler');
		
		public function cidades_estado()
		{
			$cidades = $this->Estado->Cidade->find('list',
				array(
					'conditions' => array('Cidade.estado_id' => $this->data['AtoConvocatorio']['estado_id']),
	                'fields' => array('Cidade.id', 'Cidade.nome'),
	                'order' => array('Cidade.nome ASC')
				)
			);
			$this->set('cidades',$cidades);
		}

		public function estados_pais()
		{
			$this->loadModel('Pais');
			$estados = $this->Pais->Estado->find('list',
				array(
					'conditions' => array('Estado.pais_id' => $this->data['AtoConvocatorio']['pais_id']),
	                'fields' => array('Estado.id', 'Estado.nome'),
	                'order' => array('Estado.nome ASC')
				)
			);
			$this->set('estados',$estados);
		}
		
	}

?>