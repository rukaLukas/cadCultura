<?php
class MultimidiasController extends AppController {

	var $name = 'Multimidias';

	function index() {
		$this->Multimidia->recursive = 0;
		$this->set('multimidias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Multimidia'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('multimidia', $this->Multimidia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Multimidia->create();
			if ($this->Multimidia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'multimidia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'multimidia'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Multimidia'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Multimidia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'multimidia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'multimidia'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Multimidia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'multimidia'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Multimidia->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Multimidia'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Multimidia'));
		$this->redirect(array('action' => 'index'));
	}
}
?>