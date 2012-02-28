<?php
class PfsController extends AppController {

	var $name = 'Pfs';

	function index() {
		$this->Pf->recursive = 0;
		$this->set('pfs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pf', $this->Pf->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pf->create();
			if ($this->Pf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		$curriculos = $this->Pf->Curriculo->find('list');
		$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pai->find('list');
		$contatos = $this->Pf->Contato->find('list');
		$telefones = $this->Pf->Telefone->find('list');
		$this->set(compact('nacionalidades', 'naturalidades', 'expedidorRgs', 'curriculos', 'cidades', 'escolaridades', 'tipologias', 'paises', 'contatos', 'telefones'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pf->read(null, $id);
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		$curriculos = $this->Pf->Curriculo->find('list');
		$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pai->find('list');
		$contatos = $this->Pf->Contato->find('list');
		$telefones = $this->Pf->Telefone->find('list');
		$this->set(compact('nacionalidades', 'naturalidades', 'expedidorRgs', 'curriculos', 'cidades', 'escolaridades', 'tipologias', 'paises', 'contatos', 'telefones'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pf'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pf->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pf'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pf'));
		$this->redirect(array('action' => 'index'));
	}
}
?>