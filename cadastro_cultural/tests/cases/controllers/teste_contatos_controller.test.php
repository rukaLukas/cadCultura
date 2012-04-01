<?php
/* TesteContatos Test cases generated on: 2012-03-30 16:03:59 : 1333118039*/
App::import('Controller', 'TesteContatos');

class TestTesteContatosController extends TesteContatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TesteContatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teste_contato', 'app.contato');

	function startTest() {
		$this->TesteContatos =& new TestTesteContatosController();
		$this->TesteContatos->constructClasses();
	}

	function endTest() {
		unset($this->TesteContatos);
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