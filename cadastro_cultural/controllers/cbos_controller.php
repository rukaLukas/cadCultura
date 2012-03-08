<?php
class CbosController extends AppController {

	var $name = 'Cbos';

	function index() {
		$this->Cbo->recursive = 0;
		$this->set('cbos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Cbo'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cbo', $this->Cbo->read(null, $id));
	}

	function add() {				
		if (!empty($this->data)) {
			$this->Cbo->create();
			if ($this->Cbo->save($this->data)) {
				
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'cbo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'cbo'));
			}
		}	
		$segmentos = $this->Cbo->Tipologia->Segmentocultural->find('list');
		$this->set(compact('segmentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Cbo'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cbo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'cbo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'cbo'));
			}
		}
		if (empty($this->data)) {		
			$segmentos = $this->Cbo->Segmentocultural->find('list');                    											
			$this->set(compact('segmentos'));
			$this->data = $this->Cbo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'Cbo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cbo->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Cbo'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Cbo'));
		$this->redirect(array('action' => 'index'));
	}
}
?>