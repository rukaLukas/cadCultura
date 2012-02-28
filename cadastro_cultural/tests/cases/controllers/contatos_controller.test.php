<?php
/* Contatos Test cases generated on: 2012-02-07 00:02:50 : 1328571350*/
App::import('Controller', 'Contatos');

class TestContatosController extends ContatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contato');

	function startTest() {
		$this->Contatos =& new TestContatosController();
		$this->Contatos->constructClasses();
	}

	function endTest() {
		unset($this->Contatos);
		ClassRegistry::flush();
	}

}
?>