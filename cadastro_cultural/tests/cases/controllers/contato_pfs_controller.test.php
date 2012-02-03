<?php
/* ContatoPfs Test cases generated on: 2012-02-01 14:02:08 : 1328104448*/
App::import('Controller', 'ContatoPfs');

class TestContatoPfsController extends ContatoPfsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContatoPfsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contato_pf', 'app.telefone_pf');

	function startTest() {
		$this->ContatoPfs =& new TestContatoPfsController();
		$this->ContatoPfs->constructClasses();
	}

	function endTest() {
		unset($this->ContatoPfs);
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