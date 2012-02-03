<?php
/* TelefonePf Test cases generated on: 2012-02-01 14:02:39 : 1328102859*/
App::import('Model', 'TelefonePf');

class TelefonePfTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone_pf', 'app.contato_pf');

	function startTest() {
		$this->TelefonePf =& ClassRegistry::init('TelefonePf');
	}

	function endTest() {
		unset($this->TelefonePf);
		ClassRegistry::flush();
	}

}
?>