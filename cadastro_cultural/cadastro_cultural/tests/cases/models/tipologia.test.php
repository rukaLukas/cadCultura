<?php
/* Tipologia Test cases generated on: 2012-02-01 14:02:45 : 1328102445*/
App::import('Model', 'Tipologia');

class TipologiaTestCase extends CakeTestCase {
	var $fixtures = array('app.tipologia', 'app.ocupacao', 'app.funcao', 'app.pf');

	function startTest() {
		$this->Tipologia =& ClassRegistry::init('Tipologia');
	}

	function endTest() {
		unset($this->Tipologia);
		ClassRegistry::flush();
	}

}
?>