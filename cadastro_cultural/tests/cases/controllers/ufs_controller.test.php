<?php
/* Ufs Test cases generated on: 2012-02-01 14:02:18 : 1328104338*/
App::import('Controller', 'Ufs');

class TestUfsController extends UfsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UfsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.uf', 'app.cidade', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Ufs =& new TestUfsController();
		$this->Ufs->constructClasses();
	}

	function endTest() {
		unset($this->Ufs);
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