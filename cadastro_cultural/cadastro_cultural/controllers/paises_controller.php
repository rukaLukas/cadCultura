<?php
class PaisesController extends AppController {

	var $name = 'Paises';

	function index() {
		$this->Pais->recursive = 0;
		$this->set('paises', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pais'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pais', $this->Pais->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pais->create();
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pais'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pais'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pais'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pais'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pais'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pais->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pais'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pais->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pais'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pais'));
		$this->redirect(array('action' => 'index'));
	}
}
?>