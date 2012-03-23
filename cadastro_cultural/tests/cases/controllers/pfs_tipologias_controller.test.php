<?php
/* PfsTipologias Test cases generated on: 2012-03-23 03:03:21 : 1332471321*/
App::import('Controller', 'PfsTipologias');

class TestPfsTipologiasController extends PfsTipologiasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PfsTipologiasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pfs_tipologia', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.grupotipologia', 'app.segmentocultural', 'app.cbo', 'app.atividade', 'app.elo', 'app.pais', 'app.visto', 'app.curriculo', 'app.funcao_exercida', 'app.multimidia', 'app.produto', 'app.curriculos_produto', 'app.telefone_pf');

	function startTest() {
		$this->PfsTipologias =& new TestPfsTipologiasController();
		$this->PfsTipologias->constructClasses();
	}

	function endTest() {
		unset($this->PfsTipologias);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>