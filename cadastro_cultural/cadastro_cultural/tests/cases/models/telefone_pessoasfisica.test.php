<?php
/* TelefonePessoasfisica Test cases generated on: 2012-02-01 13:02:41 : 1328099081*/
App::import('Model', 'TelefonePessoasfisica');

class TelefonePessoasfisicaTestCase extends CakeTestCase {
	var $fixtures = array('app.telefone_pessoasfisica', 'app.contato_pessoasfisica');

	function startTest() {
		$this->TelefonePessoasfisica =& ClassRegistry::init('TelefonePessoasfisica');
	}

	function endTest() {
		unset($this->TelefonePessoasfisica);
		ClassRegistry::flush();
	}

}
?>