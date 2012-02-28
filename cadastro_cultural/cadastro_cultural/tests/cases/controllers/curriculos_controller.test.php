<?php
/* Curriculos Test cases generated on: 2012-02-08 15:02:25 : 1328711605*/
App::import('Controller', 'Curriculos');

class TestCurriculosController extends CurriculosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurriculosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculo', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.telefone_pf', 'app.multimidia', 'app.produto', 'app.curriculos_produto');

	function startTest() {
		$this->Curriculos =& new TestCurriculosController();
		$this->Curriculos->constructClasses();
	}

	function endTest() {
		unset($this->Curriculos);
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