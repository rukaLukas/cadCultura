<?php
/* TelefonePessoasfisica Fixture generated on: 2012-02-01 13:02:41 : 1328099081 */
class TelefonePessoasfisicaFixture extends CakeTestFixture {
	var $name = 'TelefonePessoasfisica';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'telefone' => array('type' => 'string', 'null' => false, 'length' => 12),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'telefone' => 'Lorem ipsu'
		),
	);
}
?>