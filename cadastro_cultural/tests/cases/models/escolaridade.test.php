<?php
/* Escolaridade Test cases generated on: 2012-02-01 14:02:20 : 1328102000*/
App::import('Model', 'Escolaridade');

class EscolaridadeTestCase extends CakeTestCase {
	var $fixtures = array('app.escolaridade', 'app.pf');

	function startTest() {
		$this->Escolaridade =& ClassRegistry::init('Escolaridade');
	}

	function endTest() {
		unset($this->Escolaridade);
		ClassRegistry::flush();
	}

}
?>