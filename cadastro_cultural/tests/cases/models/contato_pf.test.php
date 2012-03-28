<?php
/* ContatoPf Test cases generated on: 2012-03-27 21:03:16 : 1332877816*/
App::import('Model', 'ContatoPf');

class ContatoPfTestCase extends CakeTestCase {
	var $fixtures = array('app.contato_pf', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.grupotipologia', 'app.segmentocultural', 'app.cbo', 'app.atividade', 'app.elo', 'app.pfs_tipologia', 'app.pais', 'app.visto', 'app.curriculo', 'app.funcao_exercida', 'app.multimidia', 'app.produto', 'app.curriculos_produto', 'app.graduacao', 'app.telefone_pf');

	function startTest() {
		$this->ContatoPf =& ClassRegistry::init('ContatoPf');
	}

	function endTest() {
		unset($this->ContatoPf);
		ClassRegistry::flush();
	}

}
?>