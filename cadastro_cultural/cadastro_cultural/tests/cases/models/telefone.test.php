<?php
/* Telefone Test cases generated on: 2012-02-07 02:02:06 : 1328578206*/
App::import('Model', 'Telefone');

class TelefoneTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone', 'app.pf');

	function startTest() {
		$this->Telefone =& ClassRegistry::init('Telefone');
	}

	function endTest() {
		unset($this->Telefone);
		ClassRegistry::flush();
	}

}
?>