<?php
class FuncoesController extends AppController {

	var $name = 'Funcoes';

	function index() {
		$this->Funcao->recursive = 0;
		$this->set('funcoes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Função'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('funcao', $this->Funcao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Funcao->create();
			if ($this->Funcao->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'função'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'função'));
			}
		}
		$ocupacoes = $this->Funcao->Ocupacao->find('list');
		$this->set(compact('ocupacoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Função'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Funcao->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'função'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'função'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Funcao->read(null, $id);
		}
		$ocupacoes = $this->Funcao->Ocupacao->find('list');
		$this->set(compact('ocupacoes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'função'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Funcao->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Função'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Função'));
		$this->redirect(array('action' => 'index'));
	}
}
?>