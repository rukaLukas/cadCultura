<?php
/* Funcoes Test cases generated on: 2012-02-01 14:02:37 : 1328104417*/
App::import('Controller', 'Funcoes');

class TestFuncoesController extends FuncoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FuncoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.funcao', 'app.ocupacao', 'app.segmento_cultural', 'app.tipologia', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Funcoes =& new TestFuncoesController();
		$this->Funcoes->constructClasses();
	}

	function endTest() {
		unset($this->Funcoes);
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