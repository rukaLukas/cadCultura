<?php
/* TelefonePf Test cases generated on: 2012-02-07 02:02:07 : 1328576467*/
App::import('Model', 'TelefonePf');

class TelefonePfTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone_pf', 'app.contato_pf', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.multimidia', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.telefone');

	function startTest() {
		$this->TelefonePf =& ClassRegistry::init('TelefonePf');
	}

	function endTest() {
		unset($this->TelefonePf);
		ClassRegistry::flush();
	}

}
?>