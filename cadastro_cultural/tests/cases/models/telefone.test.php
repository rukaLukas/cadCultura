<?php
/* Telefone Test cases generated on: 2012-02-01 14:02:53 : 1328104133*/
App::import('Model', 'Telefone');

class TelefoneTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone');

	function startTest() {
		$this->Telefone =& ClassRegistry::init('Telefone');
	}

	function endTest() {
		unset($this->Telefone);
		ClassRegistry::flush();
	}

}
?>