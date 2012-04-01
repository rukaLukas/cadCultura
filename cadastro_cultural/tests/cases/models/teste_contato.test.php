<?php
/* TesteContato Test cases generated on: 2012-03-30 16:03:20 : 1333117940*/
App::import('Model', 'TesteContato');

class TesteContatoTestCase extends CakeTestCase {
	var $fixtures = array('app.teste_contato', 'app.contato');

	function startTest() {
		$this->TesteContato =& ClassRegistry::init('TesteContato');
	}

	function endTest() {
		unset($this->TesteContato);
		ClassRegistry::flush();
	}

}
?>