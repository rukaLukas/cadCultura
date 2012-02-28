<?php
/* SegmentoCulturais Test cases generated on: 2012-02-01 14:02:19 : 1328104519*/
App::import('Controller', 'SegmentoCulturais');

class TestSegmentoCulturaisController extends SegmentoCulturaisController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SegmentoCulturaisControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.segmento_cultural', 'app.ocupacao', 'app.tipologia', 'app.funcao', 'app.pf', 'app.nacionalidade', 'app.naturalidade', 'app.expedidor_rg', 'app.curriculo', 'app.multimidia', 'app.funcao_exercida', 'app.produto', 'app.cidade', 'app.uf', 'app.escolaridade', 'app.pais', 'app.contato', 'app.contato_pf', 'app.telefone', 'app.telefone_pf');

	function startTest() {
		$this->SegmentoCulturais =& new TestSegmentoCulturaisController();
		$this->SegmentoCulturais->constructClasses();
	}

	function endTest() {
		unset($this->SegmentoCulturais);
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