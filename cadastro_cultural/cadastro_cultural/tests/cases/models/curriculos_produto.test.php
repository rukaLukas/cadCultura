<?php
/* CurriculosProduto Test cases generated on: 2012-02-08 15:02:36 : 1328711496*/
App::import('Model', 'CurriculosProduto');

class CurriculosProdutoTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculos_produto', 'app.produto', 'app.curriculo', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.telefone_pf', 'app.multimidia');

	function startTest() {
		$this->CurriculosProduto =& ClassRegistry::init('CurriculosProduto');
	}

	function endTest() {
		unset($this->CurriculosProduto);
		ClassRegistry::flush();
	}

}
?>