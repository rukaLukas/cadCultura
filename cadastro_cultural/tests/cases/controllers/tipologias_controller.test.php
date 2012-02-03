<?php
/* Tipologias Test cases generated on: 2012-02-01 14:02:39 : 1328104359*/
App::import('Controller', 'Tipologias');

class TestTipologiasController extends TipologiasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipologiasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Tipologias =& new TestTipologiasController();
		$this->Tipologias->constructClasses();
	}

	function endTest() {
		unset($this->Tipologias);
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