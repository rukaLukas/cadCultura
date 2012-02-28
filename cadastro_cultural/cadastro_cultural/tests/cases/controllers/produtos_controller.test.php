<?php
/* Produtos Test cases generated on: 2012-02-08 15:02:01 : 1328711581*/
App::import('Controller', 'Produtos');

class TestProdutosController extends ProdutosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProdutosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.produto', 'app.curriculo', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.telefone_pf', 'app.multimidia', 'app.curriculos_produto');

	function startTest() {
		$this->Produtos =& new TestProdutosController();
		$this->Produtos->constructClasses();
	}

	function endTest() {
		unset($this->Produtos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>