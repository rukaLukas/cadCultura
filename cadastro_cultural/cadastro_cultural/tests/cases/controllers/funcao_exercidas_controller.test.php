<?php
/* FuncaoExercidas Test cases generated on: 2012-02-01 14:02:00 : 1328104500*/
App::import('Controller', 'FuncaoExercidas');

class TestFuncaoExercidasController extends FuncaoExercidasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FuncaoExercidasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.funcao_exercida', 'app.curriculo', 'app.multimidia', 'app.produto', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->FuncaoExercidas =& new TestFuncaoExercidasController();
		$this->FuncaoExercidas->constructClasses();
	}

	function endTest() {
		unset($this->FuncaoExercidas);
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