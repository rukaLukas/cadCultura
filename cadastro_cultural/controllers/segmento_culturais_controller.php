<?php
class SegmentoCulturaisController extends AppController {

	var $name = 'SegmentoCulturais';

	function index() {
		$this->SegmentoCultural->recursive = 0;
		$this->set('segmentoCulturais', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Segmento cultural'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('segmentoCultural', $this->SegmentoCultural->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SegmentoCultural->create();
			if ($this->SegmentoCultural->save($this->data)) {
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
			if ($this->SegmentoCultural->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'segmento cultural'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'segmento cultural'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SegmentoCultural->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'segmento cultural'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SegmentoCultural->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Segmento cultural'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Segmento cultural'));
		$this->redirect(array('action' => 'index'));
	}
}
?>