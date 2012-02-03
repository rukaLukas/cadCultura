<?php
class ContatoPfsController extends AppController {

	var $name = 'ContatoPfs';

	function index() {
		$this->ContatoPf->recursive = 0;
		$this->set('contatoPfs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Contato pf'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contatoPf', $this->ContatoPf->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ContatoPf->create();
			if ($this->ContatoPf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'contato pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'contato pf'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Contato pf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContatoPf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'contato pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'contato pf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContatoPf->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'contato pf'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContatoPf->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Contato pf'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Contato pf'));
		$this->redirect(array('action' => 'index'));
	}
}
?>