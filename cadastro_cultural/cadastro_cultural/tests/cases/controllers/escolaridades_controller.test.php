<?php
/* Escolaridades Test cases generated on: 2012-02-01 14:02:59 : 1328104259*/
App::import('Controller', 'Escolaridades');

class TestEscolaridadesController extends EscolaridadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EscolaridadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.escolaridade', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->Escolaridades =& new TestEscolaridadesController();
		$this->Escolaridades->constructClasses();
	}

	function endTest() {
		unset($this->Escolaridades);
		ClassRegistry::flush();
	}

}
?>