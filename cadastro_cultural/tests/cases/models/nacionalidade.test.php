<?php
/* Nacionalidade Test cases generated on: 2012-02-01 14:02:13 : 1328102413*/
App::import('Model', 'Nacionalidade');

class NacionalidadeTestCase extends CakeTestCase {
	var $fixtures = array('app.nacionalidade', 'app.pf');

	function startTest() {
		$this->Nacionalidade =& ClassRegistry::init('Nacionalidade');
	}

	function endTest() {
		unset($this->Nacionalidade);
		ClassRegistry::flush();
	}

}
?>