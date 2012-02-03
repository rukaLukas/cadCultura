<?php
class CidadesController extends AppController {

	var $name = 'Cidades';

	function index() {
		$this->Cidade->recursive = 0;
		$this->set('cidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Cidade'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cidade', $this->Cidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cidade->create();
			if ($this->Cidade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'cidade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'cidade'));
			}
		}
		$ufs = $this->Cidade->Uf->find('list');
		$this->set(compact('ufs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Cidade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cidade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'cidade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'cidade'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cidade->read(null, $id);
		}
		$ufs = $this->Cidade->Uf->find('list');
		$this->set(compact('ufs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'cidade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cidade->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Cidade'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Cidade'));
		$this->redirect(array('action' => 'index'));
	}
}
?>