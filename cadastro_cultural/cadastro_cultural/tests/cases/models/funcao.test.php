<?php
/* Funcao Test cases generated on: 2012-02-01 14:02:46 : 1328102626*/
App::import('Model', 'Funcao');

class FuncaoTestCase extends CakeTestCase {
	var $fixtures = array('app.funcao', 'app.ocupacao', 'app.tipologia', 'app.pf');

	function startTest() {
		$this->Funcao =& ClassRegistry::init('Funcao');
	}

	function endTest() {
		unset($this->Funcao);
		ClassRegistry::flush();
	}

}
?>