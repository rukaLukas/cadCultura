<?php
class CurriculosProdutosController extends AppController {

	var $name = 'CurriculosProdutos';

	function index() {
		$this->CurriculosProduto->recursive = 0;
		$this->set('curriculosProdutos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Curriculos produto'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curriculosProduto', $this->CurriculosProduto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CurriculosProduto->create();
			if ($this->CurriculosProduto->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'curriculos produto'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'curriculos produto'));
			}
		}
		$produtos = $this->CurriculosProduto->Produto->find('list');
		$curriculos = $this->CurriculosProduto->Curriculo->find('list');
		$this->set(compact('produtos', 'curriculos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Curriculos produto'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CurriculosProduto->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'curriculos produto'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'curriculos produto'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CurriculosProduto->read(null, $id);
		}
		$produtos = $this->CurriculosProduto->Produto->find('list');
		$curriculos = $this->CurriculosProduto->Curriculo->find('list');
		$this->set(compact('produtos', 'curriculos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'curriculos produto'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CurriculosProduto->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Curriculos produto'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Curriculos produto'));
		$this->redirect(array('action' => 'index'));
	}
}
?>