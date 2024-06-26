<?php
/* Multimidias Test cases generated on: 2012-02-02 15:02:24 : 1328192844*/
App::import('Controller', 'Multimidias');

class TestMultimidiasController extends MultimidiasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MultimidiasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.multimidia', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Multimidias =& new TestMultimidiasController();
		$this->Multimidias->constructClasses();
	}

	function endTest() {
		unset($this->Multimidias);
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