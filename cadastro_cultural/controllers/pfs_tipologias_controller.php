<?php
class PfsTipologiasController extends AppController {

	var $name = 'PfsTipologias';

	function index() {
		$this->PfsTipologia->recursive = 0;
		$this->set('pfsTipologias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pfs tipologia'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pfsTipologia', $this->PfsTipologia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PfsTipologia->create();
			if ($this->PfsTipologia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pfs tipologia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pfs tipologia'));
			}
		}
		$pfs = $this->PfsTipologia->Pf->find('list');
		$tipologias = $this->PfsTipologia->Tipologia->find('list');
		$this->set(compact('pfs', 'tipologias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pfs tipologia'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PfsTipologia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pfs tipologia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pfs tipologia'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PfsTipologia->read(null, $id);
		}
		$pfs = $this->PfsTipologia->Pf->find('list');
		$tipologias = $this->PfsTipologia->Tipologia->find('list');
		$this->set(compact('pfs', 'tipologias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pfs tipologia'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PfsTipologia->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pfs tipologia'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pfs tipologia'));
		$this->redirect(array('action' => 'index'));
	}
}
?>