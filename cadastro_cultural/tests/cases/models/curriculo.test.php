<?php
/* Curriculo Test cases generated on: 2012-02-02 15:02:19 : 1328191459*/
App::import('Model', 'Curriculo');

class CurriculoTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf', 'app.multimidia');

	function startTest() {
		$this->Curriculo =& ClassRegistry::init('Curriculo');
	}

	function endTest() {
		unset($this->Curriculo);
		ClassRegistry::flush();
	}

}
?>