<?php
/* ContatoPfs Test cases generated on: 2012-02-07 00:02:07 : 1328571367*/
App::import('Controller', 'ContatoPfs');

class TestContatoPfsController extends ContatoPfsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContatoPfsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contato_pf', 'app.telefone_pf', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.produto', 'app.funcao_exercida', 'app.multimidia', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.tipologia', 'app.ocupacao', 'app.segmento_cultural', 'app.funcao', 'app.pais', 'app.contato', 'app.telefone');

	function startTest() {
		$this->ContatoPfs =& new TestContatoPfsController();
		$this->ContatoPfs->constructClasses();
	}

	function endTest() {
		unset($this->ContatoPfs);
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