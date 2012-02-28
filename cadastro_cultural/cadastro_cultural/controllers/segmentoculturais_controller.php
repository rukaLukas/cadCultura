<?php
class SegmentoculturaisController extends AppController {

	var $name = 'Segmentoculturais';

	function index() {
		$this->Segmentocultural->recursive = 0;
		$this->set('segmentoculturais', $this->paginate());
	}

	function view($id = null) {				
		if (!$id) {
			$this->Session->setFlash(__('Invalid segmentocultural', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('segmentocultural', $this->Segmentocultural->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Segmentocultural->create();
			if ($this->Segmentocultural->save($this->data)) {				
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'segmento cultural'));
				$this->redirect(array('action' => 'index'));
			} else {
								$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'segmento cultural'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Segmento cultural'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Segmentocultural->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'segmento cultural'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'segmento cultural'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Segmentocultural->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'segmento cultural'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Segmentocultural->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Segmento cultural'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Segmento cultural'));
		$this->redirect(array('action' => 'index'));
	}
}
?>