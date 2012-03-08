<?php
class AtividadesController extends AppController {

	var $name = 'Atividades';

	function index() {
		$this->Atividade->recursive = 0;
		$this->set('atividades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Atividade'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cnaes', $this->Atividade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Atividade->create();
			if ($this->Atividade->save($this->data)) {
				
				$this->data['Tipologia']['cnae_id'] = $this->Atividade->id;
				$this->data['Tipologia']['segmentocultural_id'] = $this->data['Atividade']['segmento_id'];
				$this->data['Tipologia']['grupotipologia_id'] = 0;
				$this->Atividade->Tipologia->save($this->data);
								
				$this->Session->setFlash(sprintf(__('A %s foi salvo.', true), 'Atividade'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'cnae'));
			}
		}
		$segmentos = $this->Atividade->Tipologia->Segmentocultural->find('list');
		$this->set(compact('segmentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Atividade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Atividade->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'cnae'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'cnae'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Atividade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'Atividade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Atividade->delete($id, $cascade = true)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Atividade'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Atividade'));
		$this->redirect(array('action' => 'index'));
	}
}
?>