<?php
/* Curriculos Test cases generated on: 2012-02-02 15:02:07 : 1328192887*/
App::import('Controller', 'Curriculos');

class TestCurriculosController extends CurriculosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurriculosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf', 'app.multimidia');

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