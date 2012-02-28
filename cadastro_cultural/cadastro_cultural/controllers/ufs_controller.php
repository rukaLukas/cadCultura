<?php
class UfsController extends AppController {

	var $name = 'Ufs';

	function index() {
		$this->Uf->recursive = 0;
		$this->set('ufs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Uf'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('uf', $this->Uf->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Uf->create();
			if ($this->Uf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'uf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'uf'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Uf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Uf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'uf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'uf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Uf->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'uf'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Uf->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Uf'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Uf'));
		$this->redirect(array('action' => 'index'));
	}
}
?>