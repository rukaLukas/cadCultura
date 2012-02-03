<?php
/* Contato Test cases generated on: 2012-02-01 14:02:12 : 1328103912*/
App::import('Model', 'Contato');

class ContatoTestCase extends CakeTestCase {
	var $fixtures = array('app.contato');

	function startTest() {
		$this->Contato =& ClassRegistry::init('Contato');
	}

	function endTest() {
		unset($this->Contato);
		ClassRegistry::flush();
	}

}
?>