<?php
/* Naturalidades Test cases generated on: 2012-02-01 14:02:07 : 1328104387*/
App::import('Controller', 'Naturalidades');

class TestNaturalidadesController extends NaturalidadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NaturalidadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.naturalidade', 'app.pf', 'app.nacionalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Naturalidades =& new TestNaturalidadesController();
		$this->Naturalidades->constructClasses();
	}

	function endTest() {
		unset($this->Naturalidades);
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