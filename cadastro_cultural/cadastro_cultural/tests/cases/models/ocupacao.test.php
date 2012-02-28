<?php
/* Ocupacao Test cases generated on: 2012-02-01 14:02:00 : 1328102820*/
App::import('Model', 'Ocupacao');

class OcupacaoTestCase extends CakeTestCase {
	var $fixtures = array('app.ocupacao', 'app.segmento_cultural', 'app.tipologia', 'app.funcao', 'app.pf');

	function startTest() {
		$this->Ocupacao =& ClassRegistry::init('Ocupacao');
	}

	function endTest() {
		unset($this->Ocupacao);
		ClassRegistry::flush();
	}

}
?>