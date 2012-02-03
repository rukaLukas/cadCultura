<?php
/* ContatoPessoasfisica Test cases generated on: 2012-02-01 13:02:37 : 1328099137*/
App::import('Model', 'ContatoPessoasfisica');

class ContatoPessoasfisicaTestCase extends CakeTestCase {
	var $fixtures = array('app.contato_pessoasfisica', 'app.telefone_pessoasfisica');

	function startTest() {
		$this->ContatoPessoasfisica =& ClassRegistry::init('ContatoPessoasfisica');
	}

	function endTest() {
		unset($this->ContatoPessoasfisica);
		ClassRegistry::flush();
	}

}
?>