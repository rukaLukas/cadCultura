<?php
class TipologiasController extends AppController {

	var $name = 'Tipologias';

	function index() {
		$this->Tipologia->recursive = 0;
		$this->set('tipologias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipologia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipologia', $this->Tipologia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipologia->create();
			if ($this->Tipologia->save($this->data)) {
				$this->Session->setFlash(__('The tipologia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipologia could not be saved. Please, try again.', true));
			}
		}
		$grupotipologias = $this->Tipologia->Grupotipologia->find('list');
		$segmentoculturais = $this->Tipologia->Segmentocultural->find('list');
		$cnaes = $this->Tipologia->Cnaes->find('list');
		$cbos = $this->Tipologia->Cbo->find('list');
		$elos = $this->Tipologia->Elo->find('list');
		$this->set(compact('grupotipologias', 'segmentoculturais', 'cnaes', 'cbos', 'elos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipologia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipologia->save($this->data)) {
				$this->Session->setFlash(__('The tipologia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipologia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipologia->read(null, $id);
		}
		$grupotipologias = $this->Tipologia->Grupotipologia->find('list');
		$segmentoculturais = $this->Tipologia->Segmentocultural->find('list');
		$cnaes = $this->Tipologia->Cnaes->find('list');
		$cbos = $this->Tipologia->Cbo->find('list');
		$elos = $this->Tipologia->Elo->find('list');
		$this->set(compact('grupotipologias', 'segmentoculturais', 'cnaes', 'cbos', 'elos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipologia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipologia->delete($id)) {
			$this->Session->setFlash(__('Tipologia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipologia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>