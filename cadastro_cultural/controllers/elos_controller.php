<?php
class ElosController extends AppController {

	var $name = 'Elos';
	

	function index() {
		$this->Elo->recursive = 0;
		$this->set('elos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Elo'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('elo', $this->Elo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Elo->create();
			if ($this->Elo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'Elo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'Elo'));
			}
		}
		$grupotipologias = $this->Elo->Tipologia->Grupotipologia->find('list');
		$cbos = $this->Elo->Tipologia->Cbo->find('list');
		$segmentos = $this->Elo->Tipologia->Segmentocultural->find('list');
		$this->set(compact('grupotipologias','cbos','segmentos'));		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid elo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Elo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'Elo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'Elo'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Elo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'Elo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Elo->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Elo'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Elo'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	function elo_relacionamento() {
		if (!empty($_POST)) {			
			$this->Elo->create();
			$this->layout = 'ajax';
			
			//print_r($_POST);
			//echo "<br>";
			//print_r($this->data);
			
			echo "true";
			/*
			print_r($this->data);
			
			
			$grupotipologiaId = $this->data['Elo']['grupotipologia'];
			$segmentoCulturalId = $this->data['Elo']['segmento_id'];
			$atividade = $this->data['Elo']['atividadeId'];						
			$tipoGrupo = $this->data['Elo']['tipoGrupo'];
			//$tipoGrupoId = $this->data['Elo']['tipoGrupoId'];
			//$this->data['Tipologia']['identificador'] = "elo";
			if($tipoGrupo == 'PF'){
				$elosId = explode(",", $this->data['Elo']['eloId']);								
				foreach ($elosId as $value) {
					
					$this->data['Tipologia']['elo_id'] = $value;
					$this->data['Tipologia']['segmentocultural_id'] = $segmentoCulturalId;
					$this->data['Tipologia']['grupotipologia_id'] = $grupotipologiaId;
					$this->data['Tipologia']['cbo_id'] = $atividade;
					if($this->Elo->Tipologia->save($this->data)){
						$this->data['Tipologia']['id'] = "";
						$save = true;
					}																					
				}	
				//exit;
			}			
						
			if ($save) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'Elo Relacionamento'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'Elo Relacionamento'));
			}
			*/			
		}
		else{		
			$grupotipologias = $this->Elo->Tipologia->Grupotipologia->find('list');
			$cbos = $this->Elo->Tipologia->Cbo->find('list');
			$segmentos = $this->Elo->Tipologia->Segmentocultural->find('list');
			$this->set(compact('grupotipologias','cbos','segmentos'));		
		}
	}
	
	
	function elo_relacionamentoAdd() {
		$this->layout = 'ajaxElo';			
		if (!empty($_POST)) {
			$this->Elo->create();																								
			
			$retorno = "";
			$contadorElo = false;
			
			$grupoTipologiaId = $_POST['grupotipologiaId'];
			$grupoTipologia = $_POST['grupotipologia'];
			$segmentoCulturalId = $_POST['segmento'];
			$atividade = $_POST['atividade'];
			$elo = $_POST['elo'];
									
			if($grupoTipologia == 'PF'){
				$elosId = explode(",", $elo);											
				foreach ($elosId as $value) {	
					// procuro se existe esse padrão de tipologia já cadastrado
					$result = $this->Elo->Tipologia->padraoElo($grupoTipologiaId,$grupoTipologia,$segmentoCulturalId,$atividade,$value);					
					if(!empty($result)){
						
						if($contadorElo){						
							$retorno .= "<b>(elo - ".$result['Elo']['nomelo'].")</b><input type=\"hidden\" name=\"eloExistente\" value=\"". $result['Elo']['id'] ."\">";
						}
						else{
							$retorno .= "Algumas Definições de <b>Elo</b> não foram possíveis cadastrar: <i>Já existe esse padrão de tipologia<b>(elo - ".$result['Elo']['nomelo'].")</b><i>
										<input type=\"hidden\" name=\"eloExistente\" value=\"". $result['Elo']['id'] ."\">";											
						}
							
						$contadorElo = true;						
						continue;						
					}					
					//echo "aki<br>";
					$this->data['Tipologia']['elo_id'] = $value;
					$this->data['Tipologia']['segmentocultural_id'] = $segmentoCulturalId;
					$this->data['Tipologia']['grupotipologia_id'] = $grupoTipologiaId;
					$this->data['Tipologia']['cbo_id'] = $atividade;
					if($this->Elo->Tipologia->saveElo($this->data)){
						$this->data['Tipologia']['id'] = "";
						
						if($contadorElo)
							$retorno .= "<br><br>Demais definições de Elo cadastradas com sucesso!";
						else
							$retorno .= "<br>Definição Elo cadastrada com sucesso!";
					}																					
				}					
			}	
			echo $retorno;											
		}
		else 
			echo "Houve um erro tente novamente";				
	}
	
	
	
	
	function combo_cbo($id = null) {		
		if ($id) {						
			$this->layout = 'ajax';
			$atividades = $this->Elo->Tipologia->find('list',array('joins' => array(
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
			$grupoTipologia = $this->params['pass']['0'];
			$tipoForm = !empty($this->params['pass']['1']) ? $this->params['pass']['1'] : "";
			//$tipoForm = $this->params['pass']['1'];
			
			
			if(!empty($tipoForm)){
				$elos = $this->Elo->Tipologia->Elo->find('list');
			}			
			else{ 
				if($grupoTipologia == 'PF'){						
					$elos = $this->Elo->Tipologia->find('list',array('joins' => array(
																			                    array(
																			                        'table' => 'grupotipologias', 
																			                    	'alias' => 'GP',                       
																			                        'type' => 'INNER',
																			                        'conditions' => array('GP.id = Tipologia.grupotipologia_id'),
																			                    ),
																			                    array(
																			                        'table' => 'elos', 
																			                    	'alias' => 'elo',                       
																			                        'type' => 'INNER',
																			                        'conditions' => array('elo.id = Tipologia.elo_id'),
																			                    )
		                    																  ),
		                    																  'conditions' => array('GP.nome' => 'PF'),
		                    																  'fields' => array('elo.id','elo.nomelo')	                    															                       															   	                      															  	  
		                    														)                    														
		                    												);		
				}				
			}			
		    $this->set(compact('elos'));					
	}
	
}
?>