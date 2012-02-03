<?php
class EscolaridadesController extends AppController {

	var $name = 'Escolaridades';

	function index() {
		$this->Escolaridade->recursive = 0;
		$this->set('escolaridades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Escolaridade'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('escolaridade', $this->Escolaridade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Escolaridade->create();
			if ($this->Escolaridade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'escolaridade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'escolaridade'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Escolaridade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Escolaridade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'escolaridade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'escolaridade'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Escolaridade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'escolaridade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Escolaridade->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Escolaridade'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Escolaridade'));
		$this->redirect(array('action' => 'index'));
	}
}
?>