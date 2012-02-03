<?php
/* Cidades Test cases generated on: 2012-02-01 14:02:20 : 1328104280*/
App::import('Controller', 'Cidades');

class TestCidadesController extends CidadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CidadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cidade', 'app.uf', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Cidades =& new TestCidadesController();
		$this->Cidades->constructClasses();
	}

	function endTest() {
		unset($this->Cidades);
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