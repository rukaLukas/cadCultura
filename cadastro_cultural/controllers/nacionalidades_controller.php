<?php
class NacionalidadesController extends AppController {

	var $name = 'Nacionalidades';

	function index() {
		$this->Nacionalidade->recursive = 0;
		$this->set('nacionalidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Nacionalidade'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nacionalidade', $this->Nacionalidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nacionalidade->create();
			if ($this->Nacionalidade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'nacionalidade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'nacionalidade'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Nacionalidade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nacionalidade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'nacionalidade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'nacionalidade'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nacionalidade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'nacionalidade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nacionalidade->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Nacionalidade'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Nacionalidade'));
		$this->redirect(array('action' => 'index'));
	}
}
?>