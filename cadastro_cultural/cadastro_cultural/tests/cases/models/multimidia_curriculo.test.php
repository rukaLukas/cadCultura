<?php
/* MultimidiaCurriculo Test cases generated on: 2012-01-31 15:01:58 : 1328019178*/
App::import('Model', 'MultimidiaCurriculo');

class MultimidiaCurriculoTestCase extends CakeTestCase {
	var $fixtures = array('app.multimidia_curriculo');

	function startTest() {
		$this->MultimidiaCurriculo =& ClassRegistry::init('MultimidiaCurriculo');
	}

	function endTest() {
		unset($this->MultimidiaCurriculo);
		ClassRegistry::flush();
	}

}
?>