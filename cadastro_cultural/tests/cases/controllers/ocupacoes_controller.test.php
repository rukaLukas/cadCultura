<?php
/* Ocupacoes Test cases generated on: 2012-02-01 14:02:52 : 1328104432*/
App::import('Controller', 'Ocupacoes');

class TestOcupacoesController extends OcupacoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OcupacoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ocupacao', 'app.segmento_cultural', 'app.tipologia', 'app.funcao', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Ocupacoes =& new TestOcupacoesController();
		$this->Ocupacoes->constructClasses();
	}

	function endTest() {
		unset($this->Ocupacoes);
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