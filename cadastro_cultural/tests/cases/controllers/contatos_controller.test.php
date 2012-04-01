<?php
/* Contatos Test cases generated on: 2012-03-30 16:03:18 : 1333118418*/
App::import('Controller', 'Contatos');

class TestContatosController extends ContatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contato', 'app.testes');

	function startTest() {
		$this->Contatos =& new TestContatosController();
		$this->Contatos->constructClasses();
	}

	function endTest() {
		unset($this->Contatos);
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