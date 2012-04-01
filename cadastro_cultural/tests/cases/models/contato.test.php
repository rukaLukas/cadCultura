<?php
/* Contato Test cases generated on: 2012-03-30 16:03:57 : 1333118397*/
App::import('Model', 'Contato');

class ContatoTestCase extends CakeTestCase {
	var $fixtures = array('app.contato', 'app.testes');

	function startTest() {
		$this->Contato =& ClassRegistry::init('Contato');
	}

	function endTest() {
		unset($this->Contato);
		ClassRegistry::flush();
	}

}
?>