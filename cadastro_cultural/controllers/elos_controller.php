<?php
class ElosController extends AppController {

	var $name = 'Elos';

	function index() {
		$this->Elo->recursive = 0;
		$this->set('elos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid elo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('elo', $this->Elo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Elo->create();
			if ($this->Elo->save($this->data)) {
				$this->Session->setFlash(__('The elo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The elo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid elo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Elo->save($this->data)) {
				$this->Session->setFlash(__('The elo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The elo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Elo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for elo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Elo->delete($id)) {
			$this->Session->setFlash(__('Elo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Elo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>