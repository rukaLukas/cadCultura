<?php
/* ContatoPf Test cases generated on: 2012-02-07 00:02:46 : 1328570626*/
App::import('Model', 'ContatoPf');

class ContatoPfTestCase extends CakeTestCase {
	var $fixtures = array('app.contato_pf', 'app.telefone_pf');

	function startTest() {
		$this->ContatoPf =& ClassRegistry::init('ContatoPf');
	}

	function endTest() {
		unset($this->ContatoPf);
		ClassRegistry::flush();
	}

}
?>