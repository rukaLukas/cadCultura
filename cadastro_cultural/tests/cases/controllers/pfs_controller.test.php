<?php
/* Pfs Test cases generated on: 2012-02-01 14:02:10 : 1328104510*/
App::import('Controller', 'Pfs');

class TestPfsController extends PfsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PfsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Pfs =& new TestPfsController();
		$this->Pfs->constructClasses();
	}

	function endTest() {
		unset($this->Pfs);
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