<?php
class NaturalidadesController extends AppController {

	var $name = 'Naturalidades';

	function index() {
		$this->Naturalidade->recursive = 0;
		$this->set('naturalidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Naturalidade'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('naturalidade', $this->Naturalidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Naturalidade->create();
			if ($this->Naturalidade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'naturalidade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'naturalidade'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Naturalidade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Naturalidade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'naturalidade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'naturalidade'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Naturalidade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'naturalidade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Naturalidade->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Naturalidade'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Naturalidade'));
		$this->redirect(array('action' => 'index'));
	}
}
?>