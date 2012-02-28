<?php
class CnaeController extends AppController {

	var $name = 'Cnae';

	function index() {
		$this->Cnaes->recursive = 0;
		$this->set('cnae', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cnaes', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cnaes', $this->Cnaes->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cnaes->create();
			if ($this->Cnaes->save($this->data)) {
				$this->Session->setFlash(__('The cnaes has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cnaes could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cnaes', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cnaes->save($this->data)) {
				$this->Session->setFlash(__('The cnaes has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cnaes could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cnaes->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cnaes', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cnaes->delete($id)) {
			$this->Session->setFlash(__('Cnaes deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cnaes was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>