<?php
/* Pf Test cases generated on: 2012-02-07 03:02:55 : 1328582875*/
App::import('Model', 'Pf');

class PfTestCase extends CakeTestCase {
	var $fixtures = array('app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.multimidia');

	function startTest() {
		$this->Pf =& ClassRegistry::init('Pf');
	}

	function endTest() {
		unset($this->Pf);
		ClassRegistry::flush();
	}

}
?>