<?php
/* Paises Test cases generated on: 2012-02-01 14:02:21 : 1328104401*/
App::import('Controller', 'Paises');

class TestPaisesController extends PaisesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaisesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pais', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Paises =& new TestPaisesController();
		$this->Paises->constructClasses();
	}

	function endTest() {
		unset($this->Paises);
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