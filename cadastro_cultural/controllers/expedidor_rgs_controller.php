<?php
class ExpedidorRgsController extends AppController {

	var $name = 'ExpedidorRgs';

	function index() {
		$this->ExpedidorRg->recursive = 0;
		$this->set('expedidorRgs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Expedidor rg'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('expedidorRg', $this->ExpedidorRg->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ExpedidorRg->create();
			if ($this->ExpedidorRg->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'expedidor rg'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'expedidor rg'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Expedidor rg'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ExpedidorRg->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'expedidor rg'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'expedidor rg'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ExpedidorRg->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'expedidor rg'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ExpedidorRg->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Expedidor rg'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Expedidor rg'));
		$this->redirect(array('action' => 'index'));
	}
}
?>