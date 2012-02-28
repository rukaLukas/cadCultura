<?php
/* Uf Test cases generated on: 2012-02-01 13:02:47 : 1328100767*/
App::import('Model', 'Uf');

class UfTestCase extends CakeTestCase {
	var $fixtures = array('app.uf', 'app.cidade');

	function startTest() {
		$this->Uf =& ClassRegistry::init('Uf');
	}

	function endTest() {
		unset($this->Uf);
		ClassRegistry::flush();
	}

}
?>