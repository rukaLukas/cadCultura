<?php
/* Produto Test cases generated on: 2012-02-08 15:02:05 : 1328711465*/
App::import('Model', 'Produto');

class ProdutoTestCase extends CakeTestCase {
	var $fixtures = array('app.produto', 'app.curriculo', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.telefone_pf', 'app.multimidia', 'app.curriculos_produto');

	function startTest() {
		$this->Produto =& ClassRegistry::init('Produto');
	}

	function endTest() {
		unset($this->Produto);
		ClassRegistry::flush();
	}

}
?>