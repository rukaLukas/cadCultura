<?php
class TelefonePfsController extends AppController {

	var $name = 'TelefonePfs';

	function index() {
		$this->TelefonePf->recursive = 0;
		$this->set('telefonePfs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Telefone pf'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('telefonePf', $this->TelefonePf->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TelefonePf->create();
			if ($this->TelefonePf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'telefone pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'telefone pf'));
			}
		}
		$pfs = $this->TelefonePf->Pf->find('list');
		$this->set(compact('pfs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Telefone pf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TelefonePf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'telefone pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'telefone pf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TelefonePf->read(null, $id);
		}
		$pfs = $this->TelefonePf->Pf->find('list');
		$this->set(compact('pfs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'telefone pf'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TelefonePf->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Telefone pf'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Telefone pf'));
		$this->redirect(array('action' => 'index'));
	}
}
?>