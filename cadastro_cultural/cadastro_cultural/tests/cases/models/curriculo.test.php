<?php
/* Curriculo Test cases generated on: 2012-02-08 15:02:12 : 1328711412*/
App::import('Model', 'Curriculo');

class CurriculoTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculo', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.telefone_pf', 'app.multimidia', 'app.produto', 'app.curriculos_produto');

	function startTest() {
		$this->Curriculo =& ClassRegistry::init('Curriculo');
	}

	function endTest() {
		unset($this->Curriculo);
		ClassRegistry::flush();
	}

}
?>