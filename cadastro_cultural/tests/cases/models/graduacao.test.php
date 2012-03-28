<?php
/* Graduacao Test cases generated on: 2012-03-27 04:03:52 : 1332816592*/
App::import('Model', 'Graduacao');

class GraduacaoTestCase extends CakeTestCase {
	var $fixtures = array('app.graduacao', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.grupotipologia', 'app.segmentocultural', 'app.cbo', 'app.atividade', 'app.elo', 'app.pfs_tipologia', 'app.pais', 'app.visto', 'app.curriculo', 'app.funcao_exercida', 'app.multimidia', 'app.produto', 'app.curriculos_produto', 'app.telefone_pf');

	function startTest() {
		$this->Graduacao =& ClassRegistry::init('Graduacao');
	}

	function endTest() {
		unset($this->Graduacao);
		ClassRegistry::flush();
	}

}
?>