<?php
class TelefonesController extends AppController {

	var $name = 'Telefones';

	function index() {
		$this->Telefone->recursive = 0;
		$this->set('telefones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Telefone'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('telefone', $this->Telefone->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Telefone->create();
			if ($this->Telefone->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'telefone'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'telefone'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Telefone'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Telefone->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'telefone'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'telefone'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Telefone->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'telefone'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Telefone->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Telefone'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Telefone'));
		$this->redirect(array('action' => 'index'));
	}
}
?>