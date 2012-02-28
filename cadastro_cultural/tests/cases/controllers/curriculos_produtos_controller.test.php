<?php
/* CurriculosProdutos Test cases generated on: 2012-02-08 15:02:40 : 1328711560*/
App::import('Controller', 'CurriculosProdutos');

class TestCurriculosProdutosController extends CurriculosProdutosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurriculosProdutosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculos_produto', 'app.produto', 'app.curriculo', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.telefone_pf', 'app.multimidia');

	function startTest() {
		$this->CurriculosProdutos =& new TestCurriculosProdutosController();
		$this->CurriculosProdutos->constructClasses();
	}

	function endTest() {
		unset($this->CurriculosProdutos);
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