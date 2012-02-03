<?php
class TipologiasController extends AppController {

	var $name = 'Tipologias';

	function index() {
		$this->Tipologia->recursive = 0;
		$this->set('tipologias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Tipologia'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipologia', $this->Tipologia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipologia->create();
			if ($this->Tipologia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'tipologia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'tipologia'));
			}
		}
		$ocupacoes = $this->Tipologia->Ocupacao->find('list');
		$funcoes = $this->Tipologia->Funcao->find('list');
		$this->set(compact('ocupacoes', 'funcoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Tipologia'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipologia->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'tipologia'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'tipologia'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipologia->read(null, $id);
		}
		$ocupacoes = $this->Tipologia->Ocupacao->find('list');
		$funcoes = $this->Tipologia->Funcao->find('list');
		$this->set(compact('ocupacoes', 'funcoes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'tipologia'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipologia->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Tipologia'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Tipologia'));
		$this->redirect(array('action' => 'index'));
	}
}
?>