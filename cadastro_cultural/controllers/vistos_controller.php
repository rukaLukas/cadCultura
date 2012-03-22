<?php
class VistosController extends AppController {

	var $name = 'Vistos';

	function index() {
		$this->Visto->recursive = 0;
		$this->set('vistos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Visto'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('uf', $this->Visto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Visto->create();
			if ($this->Visto->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'uf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'uf'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Visto'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Visto->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'uf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'uf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Visto->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'uf'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Visto->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Visto'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Visto'));
		$this->redirect(array('action' => 'index'));
	}
}
?>