<?php
class GrupotipologiasController extends AppController {

	var $name = 'Grupotipologias';

	function index() {
		$this->Grupotipologia->recursive = 2;
		$this->set('grupotipologias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Grupo tipologia'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('grupotipologia', $this->Grupotipologia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Grupotipologia->create();			
			if ($this->Grupotipologia->save($this->data)) {				
				//$this->Grupotipologia->Tipologia->set(array('grupotipologia_id' => $this->Grupotipologia->id, 'segmentocultural_id' => $this->data['Grupotipologia']['segmentocultural_id']));
				$this->Grupotipologia->Tipologia->save();	
				
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'grupo tipologia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'grupo tipologia'));
			}
		}
		//$segmentoculturais = $this->Grupotipologia->Segmentocultural->find('list');
		//$this->set(compact('segmentoculturais'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid grupotipologia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grupotipologia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'grupo tipologia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'grupo tipologia'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Grupotipologia->read(null, $id);
		}
		//$segmentoculturais = $this->Grupotipologia->Segmentocultural->find('list');
		//$this->set(compact('segmentoculturais'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'Grupo tipologia'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grupotipologia->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Grupo tipologia'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Grupo tipologia'));
		$this->redirect(array('action' => 'index'));
	}
}
?>