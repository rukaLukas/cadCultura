<?php
/* Unidadesfederativa Test cases generated on: 2012-01-31 15:01:47 : 1328021627*/
App::import('Model', 'Unidadesfederativa');

class UnidadesfederativaTestCase extends CakeTestCase {
	var $fixtures = array('app.unidadesfederativa');

	function startTest() {
		$this->Unidadesfederativa =& ClassRegistry::init('Unidadesfederativa');
	}

	function endTest() {
		unset($this->Unidadesfederativa);
		ClassRegistry::flush();
	}

}
?>