<?php
/* TelefonePfs Test cases generated on: 2012-02-07 02:02:22 : 1328579302*/
App::import('Controller', 'TelefonePfs');

class TestTelefonePfsController extends TelefonePfsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TelefonePfsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone_pf', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.multimidia', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais');

	function startTest() {
		$this->TelefonePfs =& new TestTelefonePfsController();
		$this->TelefonePfs->constructClasses();
	}

	function endTest() {
		unset($this->TelefonePfs);
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