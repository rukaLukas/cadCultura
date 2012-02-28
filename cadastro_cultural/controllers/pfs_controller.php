<?php
class PfsController extends AppController {

	var $name = 'Pfs';
	var $uses = array('Pf','Curriculo','CurriculosProduto','TelefonePf','FuncaoExercida');

	function index() {
		$this->Pf->recursive = 2;
		$this->set('pfs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}
		
		//$this->set('pf', $this->Pf->read(null, $id));
		$pf = $this->Pf->read(null, $id);
		$funcao = $this->Curriculo->find('all', array('conditions' => array('pf_id' => $id)));
		
		$this->set(compact('pf', 'funcao'));
		//$this->set('funcao', $this->Curriculo->read(array('conditions' => array('pf_id' => '$id'))));
		//exit;		
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pf->create();
			
			print_r($this->data);
			//exit;
				
			$existTipologia = false;				
			//recupera id do grupotipologia se existir
			$idGrupoTipologia = $this->Pf->Tipologia->Grupotipologia->find('first', array('fields' => array('Grupotipologia.id'),
																							  'conditions' => array('Grupotipologia.nome' => 'PF')));

			// array com dondições a serem percorridas no loop
			$conditions = array("Tipologia.elo_id = ".$this->data['Pf']['elo']. " AND Tipologia.grupotipologia_id = ".$idGrupoTipologia['Grupotipologia']['id']."",
							    "Tipologia.grupotipologia_id = ".$idGrupoTipologia['Grupotipologia']['id']."",""
								);
								
			for($i=0; $i<3; $i++){									
				$idTipologia = $this->Pf->Tipologia->find('first', array('fields' => array('Tipologia.id','Tipologia.elo_id'), 
																			'conditions' => array("Tipologia.segmentocultural_id = ".$this->data['Pf']['segmento_id']."", 
																								  "Tipologia.cbo_id = ".$this->data['Pf']['cbo']."",
																								  $conditions[$i])));
				//se existe tipologia																								  
				if($idTipologia > 0){					
					$existTipologia = true;					
					break;			
				}		
			}
			
			// se ja existe esse padrão de tipologia recuperamos o ID desse padrão									
			if(!$existTipologia){				
				$this->data['Pf']['tipologia_id'] = $idTipologia['Tipologia']['id'];
			}
			else{
				// se não existe esse padrão de tipologia cadastramos esse padrão e recuperamos o id
				// atualiza tabela tipologias, recupera id da tipologia
				$this->data['Tipologia']['elo_id'] = $this->data['Pf']['elo'];
				$this->data['Tipologia']['segmentocultural_id'] = $this->data['Pf']['segmento_id'];
				$this->data['Tipologia']['grupotipologia_id'] = $idGrupoTipologia['Grupotipologia']['id'];
				$this->Pf->Tipologia->save($this->data);
				$this->data['Pf']['tipologia_id'] = $this->Pf->Tipologia->id;
			}
			
			
			if ($this->Pf->save($this->data)) {				
				$idPf = $this->Pf->id;				
				$totalCurriculo = $this->data['Pf']['contadorCurriculo'];				
				//exit;
				
				//pega os dados dos curriculos e salva no model curriculo
				for($i = 0; $i<$totalCurriculo; $i++){						
					$this->data['Curriculo']['organizacao_responsavel'] = $_POST['or'][$i];
					$this->data['Curriculo']['data'] = $_POST['dt'][$i];
					$this->data['Curriculo']['descricao'] = $_POST['descricao'][$i];
					$this->data['Curriculo']['funcao_exercida_id'] = $_POST['funcaoId'][$i];
					$this->data['Curriculo']['pf_id'] = $idPf;
					$this->Curriculo->save($this->data);					

					
					//salva os produtos do curriculo					
					$produtoId = explode(",", $_POST['ProdutoId'][$i]);								
					foreach ($produtoId as $value) {						
						$this->data['CurriculosProduto']['produto_id'] = $value;
						$this->data['CurriculosProduto']['curriculo_id'] = $this->Curriculo->id;
						$this->CurriculosProduto->save($this->data);						
						$this->data['CurriculosProduto']['id'] = "";						
					}
					
					$this->data['Curriculo']['id'] = "";					
				}				
				
				//salva os telefones
				foreach ($this->data['Pf']['telefone'] as $value) {
					$this->data['TelefonePf']['telefone'] = $value;
					$this->data['TelefonePf']['pf_id'] = $idPf;					
					$this->TelefonePf->save($this->data);
					$this->data['TelefonePf']['id'] = "";				
				}
																
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pais->find('list');
		$segmentos = $this->Pf->Tipologia->Segmentocultural->find('list');
		$this->set(compact('nacionalidades', 'naturalidades', 'expedidorRgs', 'cidades', 'escolaridades', 'tipologias', 'paises', 'segmentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pf->read(null, $id);
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pai->find('list');
		$this->set(compact('nacionalidades', 'naturalidades', 'expedidorRgs', 'cidades', 'escolaridades', 'tipologias', 'paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pf'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pf->delete($id, $cascade = true)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pf'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pf'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	function combo_cbo($id = null) {		
		if ($id) {						
			$this->layout = 'ajax';
			$atividades = $this->Pf->Tipologia->find('list',array('joins' => array(
																	                    array(
																	                        'table' => 'cbos', 
																	                    	'alias' => 'cbo',                       
																	                        'type' => 'INNER',
																	                        'conditions' => array('cbo.id = Tipologia.cbo_id')
																	                    )
                    																  ),
                    															   'conditions' => array('Tipologia.segmentocultural_id' => $id),
                    															   'fields' => array('cbo.id','cbo.nomcbo')	                      															  	  
                    														)                    														
                    												);
		    $this->set(compact('atividades'));			
		}
	}
	
	
	function combo_elos($id = null) {										
			$this->layout = 'ajax';
			$elos = $this->Pf->Tipologia->Elo->find('list');
		    $this->set(compact('elos'));					
	}
	
	
	
}
?>