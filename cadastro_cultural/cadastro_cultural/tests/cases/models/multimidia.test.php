<?php
/* Multimidia Test cases generated on: 2012-02-02 15:02:43 : 1328191483*/
App::import('Model', 'Multimidia');

class MultimidiaTestCase extends CakeTestCase {
	var $fixtures = array('app.multimidia', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Multimidia =& ClassRegistry::init('Multimidia');
	}

	function endTest() {
		unset($this->Multimidia);
		ClassRegistry::flush();
	}

}
?>