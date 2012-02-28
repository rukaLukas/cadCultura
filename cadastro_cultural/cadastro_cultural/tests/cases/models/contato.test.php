<?php
/* Contato Test cases generated on: 2012-02-07 00:02:31 : 1328571331*/
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