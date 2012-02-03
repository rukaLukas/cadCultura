<?php
/* UnidadesFederativa Test cases generated on: 2012-01-31 15:01:40 : 1328021080*/
App::import('Model', 'UnidadesFederativa');

class UnidadesFederativaTestCase extends CakeTestCase {
	var $fixtures = array('app.unidades_federativa');

	function startTest() {
		$this->UnidadesFederativa =& ClassRegistry::init('UnidadesFederativa');
	}

	function endTest() {
		unset($this->UnidadesFederativa);
		ClassRegistry::flush();
	}

}
?>