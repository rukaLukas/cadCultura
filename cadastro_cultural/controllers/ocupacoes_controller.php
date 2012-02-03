<?php
class OcupacoesController extends AppController {

	var $name = 'Ocupacoes';

	function index() {
		$this->Ocupacao->recursive = 0;
		$this->set('ocupacoes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Ocupação'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ocupacao', $this->Ocupacao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ocupacao->create();
			if ($this->Ocupacao->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'ocupação'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'ocupação'));
			}
		}
		$segmentoCulturais = $this->Ocupacao->SegmentoCultural->find('list');
		$this->set(compact('segmentoCulturais'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Ocupação'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ocupacao->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'ocupação'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'ocupação'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ocupacao->read(null, $id);
		}
		$segmentoCulturais = $this->Ocupacao->SegmentoCultural->find('list');
		$this->set(compact('segmentoCulturais'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'ocupação'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ocupacao->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Ocupação'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Ocupação'));
		$this->redirect(array('action' => 'index'));
	}
}
?>