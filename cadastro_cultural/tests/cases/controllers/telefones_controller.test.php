<?php
/* Telefones Test cases generated on: 2012-02-01 14:02:29 : 1328104349*/
App::import('Controller', 'Telefones');

class TestTelefonesController extends TelefonesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TelefonesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone');

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