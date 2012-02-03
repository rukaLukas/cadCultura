<?php
class FuncaoExercidasController extends AppController {

	var $name = 'FuncaoExercidas';

	function index() {
		$this->FuncaoExercida->recursive = 0;
		$this->set('funcaoExercidas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Função exercida'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('funcaoExercida', $this->FuncaoExercida->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FuncaoExercida->create();
			if ($this->FuncaoExercida->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'função exercida'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'função exercida'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Função exercida'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FuncaoExercida->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'função exercida'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'função exercida'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FuncaoExercida->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'função exercida'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FuncaoExercida->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Função exercida'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Função exercida'));
		$this->redirect(array('action' => 'index'));
	}
}
?>