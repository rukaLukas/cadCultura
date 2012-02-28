<?php
/* Telefones Test cases generated on: 2012-02-07 02:02:28 : 1328578408*/
App::import('Controller', 'Telefones');

class TestTelefonesController extends TelefonesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TelefonesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.multimidia', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais');

	function startTest() {
		$this->Telefones =& new TestTelefonesController();
		$this->Telefones->constructClasses();
	}

	function endTest() {
		unset($this->Telefones);
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