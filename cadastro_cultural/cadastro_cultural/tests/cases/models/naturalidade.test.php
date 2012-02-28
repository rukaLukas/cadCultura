<?php
/* Naturalidade Test cases generated on: 2012-02-01 14:02:25 : 1328102485*/
App::import('Model', 'Naturalidade');

class NaturalidadeTestCase extends CakeTestCase {
	var $fixtures = array('app.naturalidade', 'app.pf');

	function startTest() {
		$this->Naturalidade =& ClassRegistry::init('Naturalidade');
	}

	function endTest() {
		unset($this->Naturalidade);
		ClassRegistry::flush();
	}

}
?>