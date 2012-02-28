<?php
/* UnidadeFederativa Test cases generated on: 2012-02-01 13:02:31 : 1328098831*/
App::import('Model', 'UnidadeFederativa');

class UnidadeFederativaTestCase extends CakeTestCase {
	var $fixtures = array('app.unidade_federativa', 'app.cidade');

	function startTest() {
		$this->UnidadeFederativa =& ClassRegistry::init('UnidadeFederativa');
	}

	function endTest() {
		unset($this->UnidadeFederativa);
		ClassRegistry::flush();
	}

}
?>