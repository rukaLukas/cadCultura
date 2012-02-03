<?php
/* Produtos Test cases generated on: 2012-02-01 14:02:27 : 1328104227*/
App::import('Controller', 'Produtos');

class TestProdutosController extends ProdutosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProdutosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.produto', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Produtos =& new TestProdutosController();
		$this->Produtos->constructClasses();
	}

	function endTest() {
		unset($this->Produtos);
		ClassRegistry::flush();
	}

}
?>