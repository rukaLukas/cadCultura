<?php
/* TelefonePfs Test cases generated on: 2012-02-01 14:02:16 : 1328104456*/
App::import('Controller', 'TelefonePfs');

class TestTelefonePfsController extends TelefonePfsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TelefonePfsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone_pf', 'app.contato_pf');

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