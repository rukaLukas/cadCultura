<?php
/* ExpedidorRgs Test cases generated on: 2012-02-01 14:02:54 : 1328104374*/
App::import('Controller', 'ExpedidorRgs');

class TestExpedidorRgsController extends ExpedidorRgsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ExpedidorRgsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.expedidor_rg', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->ExpedidorRgs =& new TestExpedidorRgsController();
		$this->ExpedidorRgs->constructClasses();
	}

	function endTest() {
		unset($this->ExpedidorRgs);
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