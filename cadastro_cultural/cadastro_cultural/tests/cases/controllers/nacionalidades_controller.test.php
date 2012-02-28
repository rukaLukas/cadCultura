<?php
/* Nacionalidades Test cases generated on: 2012-02-01 14:02:03 : 1328104323*/
App::import('Controller', 'Nacionalidades');

class TestNacionalidadesController extends NacionalidadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NacionalidadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.nacionalidade', 'app.pf', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Nacionalidades =& new TestNacionalidadesController();
		$this->Nacionalidades->constructClasses();
	}

	function endTest() {
		unset($this->Nacionalidades);
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