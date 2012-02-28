<?php
/* ExpedidorRg Test cases generated on: 2012-02-01 14:02:07 : 1328102467*/
App::import('Model', 'ExpedidorRg');

class ExpedidorRgTestCase extends CakeTestCase {
	var $fixtures = array('app.expedidor_rg', 'app.pf');

	function startTest() {
		$this->ExpedidorRg =& ClassRegistry::init('ExpedidorRg');
	}

	function endTest() {
		unset($this->ExpedidorRg);
		ClassRegistry::flush();
	}

}
?>