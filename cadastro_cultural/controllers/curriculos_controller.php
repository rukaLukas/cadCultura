<?php
class CurriculosController extends AppController {

	var $name = 'Curriculos';

	function index() {
		$this->Curriculo->recursive = 0;
		$this->set('curriculos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Curriculo'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curriculo', $this->Curriculo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			
			$this->Curriculo->create();
			if ($this->Curriculo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'curriculo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'curriculo'));
			}
		}
		$funcaoExercidas = $this->Curriculo->FuncaoExercida->find('list');
		$pfs = $this->Curriculo->Pf->find('list');
		$produtos = $this->Curriculo->Produto->find('list');
		$this->layout = 'ajax';
		$this->set(compact('funcaoExercidas', 'pfs', 'produtos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Curriculo'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Curriculo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'curriculo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'curriculo'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curriculo->read(null, $id);
		}
		$funcaoExercidas = $this->Curriculo->FuncaoExercida->find('list');
		$pfs = $this->Curriculo->Pf->find('list');
		$produtos = $this->Curriculo->Produto->find('list');
		$this->set(compact('funcaoExercidas', 'pfs', 'produtos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'curriculo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Curriculo->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Curriculo'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Curriculo'));
		$this->redirect(array('action' => 'index'));
	}
}
?>