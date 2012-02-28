<?php
class ProdutosController extends AppController {

	var $name = 'Produtos';

	function index() {
		$this->Produto->recursive = 0;
		$this->set('produtos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Produto'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('produto', $this->Produto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Produto->create();
			if ($this->Produto->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'produto'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'produto'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Produto'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Produto->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'produto'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'produto'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Produto->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'produto'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Produto->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Produto'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Produto'));
		$this->redirect(array('action' => 'index'));
	}
}
?>