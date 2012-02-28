<?php
/* FuncaoExercida Test cases generated on: 2012-02-01 15:02:38 : 1328108078*/
App::import('Model', 'FuncaoExercida');

class FuncaoExercidaTestCase extends CakeTestCase {
	var $fixtures = array('app.funcao_exercida', 'app.curriculo', 'app.multimidia', 'app.produto', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->FuncaoExercida =& ClassRegistry::init('FuncaoExercida');
	}

	function endTest() {
		unset($this->FuncaoExercida);
		ClassRegistry::flush();
	}

}
?>