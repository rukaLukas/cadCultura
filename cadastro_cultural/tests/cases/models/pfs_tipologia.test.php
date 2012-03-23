<?php
/* PfsTipologia Test cases generated on: 2012-03-23 03:03:54 : 1332471294*/
App::import('Model', 'PfsTipologia');

class PfsTipologiaTestCase extends CakeTestCase {
	var $fixtures = array('app.pfs_tipologia', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.grupotipologia', 'app.segmentocultural', 'app.cbo', 'app.atividade', 'app.elo', 'app.pais', 'app.visto', 'app.curriculo', 'app.funcao_exercida', 'app.multimidia', 'app.produto', 'app.curriculos_produto', 'app.telefone_pf');

	function startTest() {
		$this->PfsTipologia =& ClassRegistry::init('PfsTipologia');
	}

	function endTest() {
		unset($this->PfsTipologia);
		ClassRegistry::flush();
	}

}
?>