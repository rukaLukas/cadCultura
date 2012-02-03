<?php
/* Cidade Test cases generated on: 2012-02-01 14:02:52 : 1328102032*/
App::import('Model', 'Cidade');

class CidadeTestCase extends CakeTestCase {
	var $fixtures = array('app.cidade', 'app.uf', 'app.pf');

	function startTest() {
		$this->Cidade =& ClassRegistry::init('Cidade');
	}

	function endTest() {
		unset($this->Cidade);
		ClassRegistry::flush();
	}

}
?>