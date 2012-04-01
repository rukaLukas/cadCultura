<?php
class ContatosController extends AppController {

	var $name = 'Contatos';

	function index() {
		$this->Contato->recursive = 0;
		$this->set('contatos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Contato'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contato', $this->Contato->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Contato->create();
			if ($this->Contato->saveAll($this->data,array('validate'=>'first'))) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'contato'));
				//$this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'contato'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Contato'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'contato'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'contato'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'contato'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contato->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Contato'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Contato'));
		$this->redirect(array('action' => 'index'));
	}
}
?>